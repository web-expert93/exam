<h2 id="hover" onmouseover="hello()">Hover here</h2>
<h2 onclick="hello()">Click here</h2>
<h2>Press a key: <input type="text" onkeypress="hello()"></h2>

<script>
    function hello(){
        alert("Hello World");
    }
</script>