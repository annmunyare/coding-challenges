//function to check if the parentheses are balanced
//1. go through the string
// if the current character is an opening brace push it to brackects array
//If the current character is a closing bracket  then pop from brackects array
// and if the popped character is the matching starting bracket then fine
// at the end if the array is empty everything is balanced

function braces(str)
{   var str2 = str;
    var brackects = [];
    var openingBrackets = ['[', '{', '('];
    var closingBrackets = [']', '}', ')'];
    var matching;
    var ch;

    for (let i = 0; i < str2.length; i++)
    {
        ch = str2[i];
    
        if (closingBrackets.indexOf(ch) > -1)
        {
          matching = openingBrackets[closingBrackets.indexOf(ch)]
          if ( brackects.length == 0 || ( brackects.pop() != matching)) 
          {
            return false
          }
        }
        else 
        {
          brackects.push(ch)
        }
    }
    
  return ( brackects.length == 0)

}
console.log(braces("{([)}"));
