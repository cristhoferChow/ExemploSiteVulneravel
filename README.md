# ExemploSiteVulneravel

##Alterações Realizadas
No arquivo login.php, alteramos a senha para MD5 e utilizamos o método strval, que força a variável a ser string. Desta forma, o SLQ Injection se torna impossível de se fazer no campo de senha.
Outra alteração foi realizada foi no arquivo bd_vulneravel.sql, onde alteramos a senha para um valor criptografado em MD5.
