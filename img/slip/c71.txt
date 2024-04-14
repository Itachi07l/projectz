#include<conio.h>

#include<iostream.h>

#include<string.h>

class mystr

{

public:int replace(char *str,char,char);

};

int mystr::replace(char *str,char(),char c2='r')

{

while(str!='\0')

{

if(*str==c1)

{

*str==c2;

n++;

}

str++;

i++;

}

str=str-i;

return n;

}

int main()

{

mystr m;

char *str,c1,c2;

clrscr();

cout<<"Enter string";

cin>>str;

cout<<"Enter character which is to replace";

cin>>a;

cout<<"Number of replacement="<<m.replace(str,c1,c2);

cout<<"After replacement string is ="<<str;

getch();

return 0;