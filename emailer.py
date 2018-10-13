#!/usr/bin/env python
import smtplib
import sys
from email.mime.text import MIMEText

def send(message, subject, to):

    msg = MIMEText(message)
    msg['Subject'] = subject
    msg['From'] = 'mysterious_weirdo@outlook.com'
    msg['To'] = to

    server = smtplib.SMTP('smtp-mail.outlook.com', 587)
    server.starttls()
    server.login('mysterious_weirdo@outlook.com','Zxcvbnm123@')
    server.sendmail('mysterious_weirdo@outlook.com', to, msg.as_string())
    server.quit()

send('Hello', 'World', sys.argv[1])
