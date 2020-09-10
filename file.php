<!DOCTYPE html>
<html lang="pt-BR">
	<body>
		<a onclick="copyToClipboard('EXEMPLO')">
		    <span style="cursor:pointer; background-color:#fafbfc;padding:20px;">
		    EXEMPLO
		    </span>
		</a>

		<script type="text/javascript">
		function copyToClipboard(value) {

			var tempInput = document.createElement("input");
		    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
		    tempInput.value = value;
		    document.body.appendChild(tempInput);
		    tempInput.select();
		    document.execCommand("copy");
		    document.body.removeChild(tempInput);

			alert('Copiado: '+tempInput.value);
		}
		</script>
	</body>
</html>
