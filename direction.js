function directionAnn(arr){
    var direction = arr;
    var finalDirection = [];
   
    // console.log(direction);

    for (x = 0; x < direction.length; x++) {
        if ( (direction[x] == "NORTH") && (direction[x + 1] == "SOUTH")) {
            delete direction[x];
            delete direction[x+1];
        } else if ( (direction[x] == "SOUTH") && (direction[x + 1] == "NORTH")) {
            delete direction[x];
            delete direction[x+1];
        }else if ( (direction[x] == "EAST") && (direction[x + 1] == "WEST")) {
            delete direction[x];
            delete direction[x+1];
        } else if( (direction[x] == "WEST") && (direction[x + 1] == "EAST")) {
            delete direction[x];
            delete direction[x+1];
        } 
    }
    
    // console.log(direction);
    for (x = 0; x < direction.length; x++)
    {
        if (direction[x] !== undefined)
        {
            finalDirection.push(direction[x]);
        }
        // console.log('vvv');
    }
    return finalDirection;
}

console.log(directionAnn(["NORTH","SOUTH","SOUTH","EAST","WEST","WEST"]));
