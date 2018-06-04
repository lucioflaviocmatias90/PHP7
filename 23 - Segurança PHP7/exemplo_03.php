<?php 

$pasta = "arquivos";

if (!is_dir($pasta)) {
	
	mkdir($pasta);
	echo "Pasta criada";
}

/*

As permissões de pasta vão de 0 até 7


|   | r | w | x |                      Descrição                      
| 0 | - | - | - | Nenhuma permissão de acesso.                        
| 1 | - | - | x | Permissão somente de execução (x).                  
| 2 | - | x | - | Permissão somente de gravação (w).                  
| 3 | - | x | x | Permissões de gravação e execução (wx).             
| 4 | x | - | - | Permissão somente de leitura (r).                   
| 5 | x | - | x | Permissões de leitura e execução (rx).              
| 6 | x | x | - | Permissões de leitura e gravação (rw).              
| 7 | x | x | x | Permissão total (leitura, gravação e execução, rwx).


| n | x | - | - | 1ª coluna - Dono da pasta.
| n | - | x | - | 2ª coluna - Grupos de usuários.
| n | - | - | x | 3ª coluna - Outros ou Convidados (Guests).

Exemplo: 755 -> 

*/


?>