/*Vista de todos los usuario*/

create view allusers as 
select persona.nombres, persona.apellidos, usuario.nombreUsuario, usuario.contrasena, 
usuario.tipo, usuario.estado, usuario.test 
from persona 
inner join usuario 
on 
persona.codPersona = usuario.codUsuario;