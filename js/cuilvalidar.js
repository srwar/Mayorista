function validarcuit(s) { 
var v2 = 0;
var v3 = 0;
if(esNumeroEnteroValido(s)) { 

if (! isNaN(s)) {
   v2 = (Number(s.substr(0,1)) * 5 +
         Number(s.substr(1,1)) * 4 +
         Number(s.substr(2,1)) * 3 +
         Number(s.substr(3,1)) * 2 +
         Number(s.substr(4,1)) * 7 +
         Number(s.substr(5,1)) * 6 +
         Number(s.substr(6,1)) * 5 +
         Number(s.substr(7,1)) * 4 +
         Number(s.substr(8,1)) * 3 +
         Number(s.substr(9,1)) * 2) % 11;
 
     v3 = 11 - v2;
      switch (v3) {
     case 11 : v3 = 0; break;
     case 10 : v3 = 9; break;
     }

     return Number(s.substr(10,1)) == v3;
}
else
{
	return false;
}
} else {
		return false;
}
}

