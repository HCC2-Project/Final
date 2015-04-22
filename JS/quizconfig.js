 /*
     * @author Sena Onsho
     * @Date 25/03/2015
     * @Source http://www.javascriptkit.com
     * 
 */
//Enter total number of questions:
var totalquestions=25

//Enter the solutions corresponding to each question:
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
correctchoices[17]='d'
correctchoices[18]='b'
correctchoices[19]='c'
correctchoices[20]='b'
correctchoices[21]='c' 
correctchoices[22]='a' 
correctchoices[23]='c'
correctchoices[24]='d'
correctchoices[25]='b'

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
document.location="results1.php"
}


function showsolution(){
var result = window.open("","result")
result.focus()
result.document.open()
result.document.write('<title>Solution</title>')
result.document.write('<center><h3>Solution to Quiz</h3></center>')
result.document.write('<center><font face="Arial">')

for (i=1;i<=totalquestions;i++){
for (j=0;j<incorrect.length;j++){
if (i==incorrect[j])
wrong=1
}
if (wrong==1){
result.document.write("Question "+i+"="+correctchoices[i].fontcolor("red")+"<br>")
wrong=0
}
else
result.document.write("Question "+i+"="+correctchoices[i].fontcolor("green")+"<br>")
}
result.document.write('</center></font>')
result.document.write("<h5>Note:The solutions in red are the ones to the questions you had incorrectly answered.</h5><p align='center'><small>")
result.document.close()
}


