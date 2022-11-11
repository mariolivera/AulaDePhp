<label for="">Dia</label>
<select name="" id="">
    <?php
    for ($dia = 1; $dia <= 31; $dia++) {
        echo "<option>{$dia}</option>";
    };
    ?>
</select>

<label for="">Mes</label>
<select mes="" id="">
    <?php
    $meses = [
        'Janeiro','Fervereiro','Março','Abril','Maio','Junho',
        'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro',
];
      
    for ($mes=0;$mes<=11;$mes++) {
        echo "<option>{$meses[$mes]}</option>";
    };
    ?>
</select>


<label for="">Ano</label>
<select ano="" id="">
    <?php
    for ($ano=2022; $ano>=1900;$ano--) {
        echo "<option>{$ano}</option>";
    };
    ?>
</select>