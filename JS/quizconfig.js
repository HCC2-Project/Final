
//total number of questions:
var totalquestions=25

//the solutions corresponding to each question:
var correctchoices=new Array()
correctchoices[1]='c' //question 1 solution
correctchoices[2]='a' //question 2 solution, and so on.
correctchoices[3]='c'
correctchoices[4]='c'
correctchoices[5]='d'
correctchoices[6]='c'
correctchoices[7]='b'
correctchoices[8]='b'
correctchoices[9]='c'
correctchoices[10]='b'
correctchoices[11]='a'
correctchoices[12]='d' 
correctchoices[13]='c'
correctchoices[14]='c'
correctchoices[15]='d'
correctchoices[16]='c'
correctchoices[17]='b'
correctchoices[18]='b'
correctchoices[19]='c'
correctchoices[20]='b'
correctchoices[21]='c' 
correctchoices[22]='a' 
correctchoices[23]='c'
correctchoices[24]='c'
correctchoices[25]='d'

function gradeit(){
var incorrect=null
for (q=1;q<=totalquestions;q++){
	var thequestion=eval("document.myquiz.question"+q)
	for (c=0;c<thequestion.length;c++){
		if (thequestion[c].checked==true)
		actualchoices[q]=thequestion[c].value
		}
		
	if (actualchoices[q]!=correctchoices[q]){ //process an incorrect choice
		if (incorrect==null)
		incorrect=q
		else
		incorrect+="/"+q
		}
	}

if (incorrect==null)
incorrect="a/b"
document.cookie='q='+incorrect
if (document.cookie=='')
alert("Your browser does not accept cookies. Please adjust your browser settings.")
else
window.location="results.htm"
}


