<?php
//<form>
//<input>
//<select>
?>
<h2>Exercício 1</h2>
<p>Criar um formulário com dois 
    campos inputs e um 
    select para realizar operações 
    matemáticas</p>
<!-- isso não aparece! -->
<form>
    <label>Valor 1</label>
    <br>
    <input name="valor-1" type="text"/>
    <br>
    <label>Operação</label>
    <br>
    <select name="operador">
        <option></option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">x</option>
        <option value="/">/</option>
    </select>
    <br>
    <label>Valor 2</label>
    <br>
    <input name="valor-2" type="text"/>
</form>