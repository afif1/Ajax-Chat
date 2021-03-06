<!DOCTYPE html>
<html>
	
	<head>
		
		<link href="chat.css" type = "text/css" rel="stylesheet">
		<script type="text/javascript" src="chat.js"></script>
		
	</head>
	
	<body onload="init();">
		
		<table id="content">
			<tr>
				<td>
					<div id="scroll">
						
					</div>
				</td>
				
				<td id="colorpicker" valign="top">
					
					<img src="palette.png" onclick="getColor(event);" />
					<br />
					
					<input id="color" type="hidden" readonly="true" value="#000000"/>
					(text will look like this)
					
				</td>
			</tr>
		</table>
		
		<div>
			<input type="text" id="userName" maxlength="10" size="10" onblur="checkUsername();"/>
			<input type="text" id="messageBox" maxlength="2000" size="50" onkeydown="handleKey(event);"/>
			<input type="button" value="Send" onclick="sendMessage();" />
			<input type="button" value="Delete All" onclick="deleteAllMessages();" />
		</div>
	</body>
	
</html>