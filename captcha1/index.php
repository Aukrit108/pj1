<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="genereteCaptcha();">
    <center>
        <table>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="mainCaptcha" readonly="readonly" />
                    <input type="button" id="refresh" value="Refresh" onclick="gennereteCaptcha();" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="txtinput" />
                </td>
            </tr>
            <tr>
                <td>
                    <input id="button1" type="button" value="check" onclick="CheckValidCaptcha();" />
                </td>
            </tr>
        </table>
    </center>

    <script type="text/javascript">
		function generateCaptcha() {
			var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
			var i;
			for (i = 0; i < 8; i++) {
				var a = alpha[Math.floor(Math.random() * alpha.length)];
				var b = alpha[Math.floor(Math.random() * alpha.length)];
				var c = alpha[Math.floor(Math.random() * alpha.length)];
				var d = alpha[Math.floor(Math.random() * alpha.length)];
				var e = Math.ceil(Math.random() * 9) + '';
				var f = Math.ceil(Math.random() * 9) + '';
				var g = Math.ceil(Math.random() * 9) + '';
				var h = Math.ceil(Math.random() * 9) + '';
			}
			var code = a + b + c + d + e + f + g + h;
			document.getElementById("mainCaptcha").value = code
		}

		function CheckValidCaptcha() {
			var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
			var string2 = removeSpaces(document.getElementById('txtInput').value);
			if (string1 == string2) {
				document.getElementById('success');
				alert("Form is validated Successfully");
				return true;
			} else {
				document.getElementById('error');
				alert("Please enter a valid captcha.");
				return false;
			}
		}

		function removeSpaces(string) {
			return string.split(' ').join('');
		}
	</script>

</body>
</html>