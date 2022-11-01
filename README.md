# ExemploSiteVulneravel

## Alterações
<ul>
    <li>No arquivo login.php, aplicamos a criptografia MD5 na senha e utilizamos o método strval, o que força a variável a ser string. Esta alteração impede o SQL Injection no input.</li>
    <br>
    <li>Outra alteração foi feita no arquivo bd_vulneravel.sql, onde retiramos a senha explícita e inserimos ela criptografada.</li>
    <br>
    <li>No index.php, colocamos nas inputs os atributos patterns, que limitam caracteres de ' e ", impedindo a inserção de SQL no código.</li>
</ul>