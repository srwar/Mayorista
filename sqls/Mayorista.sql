load data infile 'd:\\Rol.txt' into table rol  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\Categoria.txt' into table categoria  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\Proveedores.txt' into table proveedor  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\Productos.txt' into table producto  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\Clientes.txt' into table cliente  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\Empleados.txt' into table empleado  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\MayoristaData\\UsuariosIntranet.txt' into table usuarios_intranet  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\UsuariosExtranet.txt' into table usuarios_extranet  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\PedidosClientes.txt' into table pedido_cliente  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\MayoristaData\\PedidosProveedor.txt' into table pedido_proveedor  fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\MayoristaData\\PedidosProveedorProducto.txt' into table ped_proveedor_producto fields terminated by '|' lines terminated by '\r\n';
load data infile 'd:\\PedidosClienteProducto.txt' into table ped_cliente_producto  fields terminated by '|' lines terminated by '\r\n';


 select c.* from cliente c join pedido_cliente pc on c.cuit != pc.cliente;



select * from empleado;
select * from categoria;
load data infile 'd:\\Productos.txt' into table producto fields terminated by '|' lines terminated by '\r\n';
select * from producto;

select  *   from mysql.user  where user = '20100037751' into  outfile  'D:\user.txt' fields terminated by '|' lines terminated by '\r\n'  ;

select * from proveedor;
CREATE OR REPLACE VIEW pedidos_realizados AS 
	select nro_pedido, cliente, fecha_solicitud 
	from pedido_cliente 
	WHERE estado_pedido = 'RECIBIDO' 
	ORDER BY nro_pedido DESC 
	LIMIT 20;
	
CREATE OR REPLACE VIEW ranking_productos AS
		SELECT p.codigo, p.nombre, SUM(pcp.cantidad_recibida) 
		FROM ped_cliente_producto as pcp
			JOIN producto as p ON pcp.producto = p.codigo
			JOIN pedido_cliente as pc ON pc.nro_pedido = pcp.nro_pedido
		WHERE pc.estado_pedido = 'RECIBIDO'
		GROUP BY p.codigo
		ORDER BY SUM(pcp.cantidad_recibida) DESC
		LIMIT 30;
		
CREATE OR REPLACE VIEW productos_oferta AS
		SELECT codigo, nombre, CONCAT(p_cantidad, ' x ', p_tamanio, ' ', p_unidad_medida ) as descripcion, precio 
		FROM producto
		WHERE oferta = 1 AND activo = 1
		ORDER BY RAND();
		
delimiter |		
CREATE  TRIGGER  suma_stock AFTER UPDATE ON pedido_proveedor 
	FOR EACH ROW 
        BEGIN
			IF NEW.estado_pedido = 'RECIBIDO' THEN
                    UPDATE ped_proveedor_producto, producto SET stock = producto.stock + ped_proveedor_producto.cantidad_recibida                    
                    WHERE	NEW.nro_pedido = ped_proveedor_producto.nro_pedido
                    AND producto.codigo = ped_proveedor_producto.producto;		
			END IF;
        END |
delimiter ;	

delimiter |		
CREATE  TRIGGER  resta_stock AFTER UPDATE ON pedido_cliente
	FOR EACH ROW 
        BEGIN
			IF NEW.estado_pedido = 'RECIBIDO' THEN
                    UPDATE ped_cliente_producto, producto SET stock = producto.stock - ped_cliente_producto.cantidad_recibida                    
                    WHERE	NEW.nro_pedido = ped_cliente_producto.nro_pedido
                    AND producto.codigo = ped_cliente_producto.producto;		
			END IF;
        END |
delimiter ;	

DROP TRIGGER crear_vista_oferta;

delimiter |
CREATE  TRIGGER  crear_vista_oferta AFTER UPDATE ON producto
	FOR EACH ROW 
        BEGIN
                IF NEW.oferta = 1 THEN
                    CALL crear_vista_oferta();
                END IF;
        END |
delimiter ;	


DROP PROCEDURE crear_vista_oferta;


DROP EVENT cambiar_productos_oferta;

delimiter |
CREATE EVENT cambiar_productos_oferta 
ON SCHEDULE
EVERY  1 WEEK
DO 
    BEGIN
    UPDATE producto SET oferta = 0 WHERE oferta = 1;
    UPDATE producto, (select * from producto ORDER BY RAND() LIMIT 20) as p SET producto.oferta = 1 WHERE p.codigo = producto.codigo ;
    END |
    
    delimiter ;

UPDATE pedido_proveedor,  ped_proveedor_producto SET ped_proveedor_producto.cantidad_recibida = ped_proveedor_producto.cantidad_solicitada 
- CAST(rand()*ped_proveedor_producto.cantidad_solicitada AS UNSIGNED) WHERE pedido_proveedor.nro_pedido = ped_proveedor_producto.nro_pedido ;