This readme file will serve as a question and answer file
---

#### Section 1: FrontEnd

Question 1:

Provide some examples of where you contributed to making a project more accessible 
according to the WCAG 2.1 AA standards.

~~~
Answer:

The last project that I worked with required me to ensure that the content would 
display correctly regardless of the orientation of the device that the user is using. 
The system also required me to use a lot of status messages for every action the 
user makes. eg. When the user saves information. The status message needs to notify the 
user that the information was saved correctly. If not saved correctly, display a message 
with a warning that the information did not save.
~~~

Question 2:

On a webpage in desktop view, there are many elements. 
As the page scales down in size towards mobile view, some of those elements 
become unnecessary and need to disappear. Provide an example of how you would 
implement this kind of front-end functionality using Bootstrap and CSS/SCSS.

~~~
Answer:
I know this is very basic but serves the need for the above question.

<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
    Content only displays on large and medium screens.
    Content hidden on small and extra small screens
</div>

Bootstrap also has classess to display only for the different screen sizes.
~~~

#### Section 2: SQL Scripting

You’ll use a dummy data set for this question – please see attached. 
All you need to do is open the query in WorkBench and try execute it. 
It should be re-runnable in that the temp tables will be deleted if they 
already exist and repopulated upon execution. 

Question:  Top Salesperson and Client by Revenue

Write a query that returns, for each month represented in the data set, 
who the top salesperson was based on total sales, 
and which client generated the greatest profit for the business. 
Please include these in the same query, so not two separate queries 
(i.e.: show one column for every month in the data set, 
one column for the id of who the top salesperson was by ZAR revenue, 
and the client id of the client who was most profitable
 in the quarter by ZAR profit (profit = sales price minus cost * units sold). 
 So, something like the following (the numbers below are just random).

~~~
Answer:

The answer you will find in the "Answers/sql" folder.
~~~


#### Section 3: PHP Scripting

Notes:

- We’re interested to see how you architect your solution in alignment 
with recognised programming patterns and practices.
- Please provide any PHPUnit tests you included to validate your solution.

Question: 

Calculator Solution You are to write a simple calculator application that accepts 
a string parameter containing the mathematical expression to be evaluated and 
returns in some fashion the correct answer. 
Important things to note are that: 

- Expressions may contain integers and one or more of the 
following operators: +, -, /, *, (, and ). 
- There can be parenthesis within the string so you must evaluate it 
properly according to the rules of arithmetic. 
If you have a string like this: #/#*# or #+#(#)/#, 
then evaluate from left to right. So, divide then multiply, 
and for the second one multiply, divide, then add. 
- Your calculator’s outputs should be accurate to two decimal places.
 
Examples of valid inputs and outputs include: 
- 2+(3-1)*3 [answer is 8] 
- (2-0)+(6/2) [answer is 5] 
- 6*(4/2)+3*1 [answer is 15] 
- 6/3-1 [answer is 1]

~~~
Answer:

The solution for this is found in the "Answers/php" folder.
~~~


#### Section 4: Shell Scripting

Question: Transposing a file

Given a text file file.txt, transpose its content. 
You may assume that each row has the same number of columns 
and each field is separated by the ' ' character. 

Example: If file.txt has the following content: 
- name age 
- alice 21 
- ryan 30 

The output should be the following: 
- name alice ryan 
- age 21 30

~~~
Answer:

#!/usr/bin/env bash

awk '{
    for (i=1;i<=NF;i++){
        if (NR==1){
            res[i]=$i
        }
        else{
            res[i]=res[i]" "$i
        }
    }
}
END{
    for(j=1;j<=NF;j++){
        print res[j]
    }
}
' file.txt
~~~


#### Section 5: AWS Architecture

Question: Moodle Instance on AWS 

You are to provision an instance of the 
Moodle learning management system (LMS) on AWS 
for a client based out of the United Kingdom. 
The client provides bespoke supplementary business qualifications to executives 
already in possession of a graduate degree. 
Importantly, the client has asked that the solution: 
- Be resilient – any downtime negatively impacts their reputation 
and ability to earn revenue, so this must be kept to an absolute minimum. 
- Be scalable – their existing self-hosted LMS has had difficulty scaling
 to meet demand during times of increased activity on the system. 
 They need the solution to scale automatically with demand. 
- Be secure – the client, by default, expects that the LMS, 
the server software, and the AWS services they execute on be 
configured according to established best security practices, 
and that services provided by AWS to manage this 
(like firewalls and monitoring) be in place. 

To this end, please create an AWS account and use the free-tier options to set up a 
bestpractice architecture. On this architecture, 
install the LAMP stack and the latest Moodle LMS. 
Where relevant and necessary, explain what you would set up/configure
 to ensure appropriate security and scalability. 
You can provide read-only access to the devops@hubblestudios.com 
with instructions on what you’ve set up and where.

~~~
Answer:


~~~
