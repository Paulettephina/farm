import cgi,os
print ('content-type:text/html\r\n\r\n')
form=cgi.FieldStorage()
kg=str(form.getvalue("weight"))
num=str(form.getvalue(serial))
print('<html>')
print('<body>')
print('<h1>weight is \n(%s)</h1/>'%kg)
print('<h2>%s</h2>'%num)


