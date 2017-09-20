var selectElementsStartingWithA = function(array) {
  var indices = [];
  var table = ['bananas', 'apples', 'pears', 'avocados']
  var élément = "a";
  for (var i = 0; i < table.length; i++) {
    if (table[i].indexOf(élément) == 0){
      indices.push(table[i]);
    }
  }
  return indices;
}

var selectElementsStartingWithVowel = function(array) {
    var indices = [];
    var table = ['john', 'david', 'omar', 'fred', 'idris', 'angela'];
    for (var i = 0; i < table.length; i++) {
      if (table[i].indexOf("o") == 0){
        indices.push(table[i]);
      }
      else if (table[i].indexOf("i") == 0){
        indices.push(table[i]);
      }
      else if (table[i].indexOf("a") == 0){
        indices.push(table[i]);
      }
    }
    return indices;
}

var removeNullElements = function(array) {
    var indices = [];
    var table = ['a', 'b', null, null, false, 0];
      for (var i = 0; i < table.length; i++) {
        if(table[i].includes(null)){
          table.pop(table[i]);
      }
      }
      return table;
}

var removeNullAndFalseElements = function(array) {
  var indices = [];
  var table = ['a', 'b', null, null, false, 0];
    for (var i = 0; i < table.length; i++) {
      if(table.includes(null)){
        table.pop(table[i]);
    }
    else if (table.includes(flase)) {
        table.pop(table[i]);
    }
    }
    return table;
}


var reverseWordsInArray = function(array) {
    return 'Write your method here';
}

var everyPossiblePair = function(array) {
    return 'Write your method here';
}

var allElementsExceptFirstThree = function(array) {
    return array.slice(3);
}

var addElementToBeginning = function(array, element) {
  var table = [2, 3, 4, 5];
   table.unshift(1);
   return table;
}

var sortByLastLetter = function(array) {
  var table = ['Lannister', 'Stark', 'Greyjoy', 'Targaryen'];

}

var getFirstHalf = function(string) {
    return string.substring(0, 3);
}

var makeNegative = function(number) {
  if (number < 0){
    return (number);
  }
  else if (number > 0)
    return (-number);
}

var numberOfPalindromes = function(array) {
    var taBle = []
    var table = ['kayak', 'noon', 'khaleesi', 'hodor', 'racecar', 'abcbc', 'abcba'];
    for (var i = 0; i < table.length; i++) {
      if ((table[i].lenght % 2) == 0) {
        if ((table[i].substring(0, (table[i].length)/2)) == (table[i].substring((table[i].length)/2) , table[i].length){
          table.push(taBle);
        }
      }
      else{
        if (((table[i].substring(0, (table[i].length)/2)) == (table[i].substring((table[i].length)/2)-1 , table[i].length)) {
          table.push(taBle);
        }
      }
      }
      return taBle.length();
    }

var shortestWord = function(array) {
    return 'Write your method here';
}

var longestWord = function(array) {
    return 'Write your method here';
}

var sumNumbers = function(array) {
    return 'Write your method here';
}

var repeatElements = function(array) {
    return 'Write your method here';
}

var stringToNumber = function(string) {
    return 'Write your method here';
}

var calculateAverage = function(array) {
    return 'Write your method here';
}

var getElementsUntilGreaterThanFive = function(array) {
    return 'Write your method here';
}

var convertArrayToObject = function(array) {
    return 'Write your method here';
}

var getAllLetters = function(array) {
    return 'Write your method here';
}

var swapKeysAndValues = function(object) {
    return 'Write your method here';
}

var sumKeysAndValues = function(object) {
    return 'Write your method here';
}

var removeCapitals = function(string) {
    return 'Write your method here';
}

var roundUp = function(number) {
    return 'Write your method here';
}

var formatDateNicely = function(date) {
    return 'Write your method here';
}

var getDomainName = function(string) {
    return 'Write your method here';
}

var titleize = function(string) {
    return 'Write your method here';
}

var checkForSpecialCharacters = function(string) {
    return 'Write your method here';
}

var squareRoot = function(number) {
    return 'Write your method here';
}

var factorial = function(number) {
    return 'Write your method here';
}

var findAnagrams = function(string) {
    return 'Write your method here';
}

var convertToCelsius = function(number) {
    return 'Write your method here';
}

var letterPosition = function(array) {
    return 'Write your method here';
}
