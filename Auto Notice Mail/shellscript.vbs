Set WinScriptHost = CreateObject("WScript.Shell")
WinScriptHost.Run Chr(34) & "C:\xampp\htdocs\candidate-portfolio-main\Auto Notice Mail\noticemail.bat" & Chr(34), 0
Set WinScriptHost = Nothing