<script>
    fetch('/backend/secret.txt')
        .then(response => response.text())
        .then(data => {
            document.getElementById('output').innerText = data;
        });
</script>
