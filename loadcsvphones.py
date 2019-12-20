import csv
from twilio.rest import TwilioRestClient
from twilio import twiml

def messagessend(client,phones_final):
	for number in phones_final:
			message = client.messages.create(to=number, from_="INSERT PHONE NUMBER HERE",
                                     body=
                                     "Thank you for your reaching out! How can I help you answer today?")

phones_final = []

account_sid = "#####" #ID from you twilio account
auth_token = "#####" #token from you twilio account
client = TwilioRestClient(account_sid, auth_token)

with open ('CR.csv', 'rb') as csvfile:
	 phone = csv.reader(csvfile)
	 phoneslist = list(phones)
	 firstcol = [row[0] for row in phoneslist]	
	 secondcol = [row[1] for row in phoneslist]
	 phones = secondcol[1] + secondcol[2]
	 phones_cleaned = [x for x in phones if x.isdigit() ]
	 phones_cleaned_string = ''.join(phones_cleaned)
	 phones_final = [phonescleanedstring[i:i+10] for i in range(0, len(phones_cleaned_string), 10)]
	 print phones_final


print phones_final

messagessend(client, phones_final)