<html>
    <head>
        <title>Desmos Trial</title>
        <script src="https://www.desmos.com/api/v1.1/calculator.js?apiKey=dcb31709b452b1cf9dc26972add0fda6"></script>
    </head>
    <body>
        <div id="calculator" style="width: 600px; height: 400px;"></div>
    </body>
    <script>
        var elt = document.getElementById('calculator');
        var calculator = Desmos.GraphingCalculator(elt);
        calculator.setExpression({id:'graph1', latex:'y=x^3'});
    </script>
</html>
