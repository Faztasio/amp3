/*
Execute this file to run your Amp3 server.
*/
//- User Configuration -//
var NODE_ENV = "development";

//- Source <DON'T EDIT PAST THIS LINE> -//
const fs = require("fs");
const path = require("path");

new Function("", fs.readFileSync(path.resolve("./Controller")))
