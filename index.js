// Types 
function class_App() {
  this.state
  this.database
  this.userdata

  this.define_database = function() {  }
}

function class_Table() {
  this.dbref
  this.query

  this.load_records = function() { }

}

function class_Record() {
  this.parentObj  // likely to be a table

  this.fields = [] // array of class_Field
  
  this.dbid

  this.save_toDb = function() { }
  this.get_fromDb = function() { }
  this.delete_fromDb = function() { }

}

function class_Field() {  
  this.parentObj  // likely to be a record   

  this.label
  this.name
  this.domid
  
  this.tvalue // temporary value

  this.inputFormClass

  this.build_input = function() { }
  
  this.save_toDb = function() { }   
  this.get_fromDb = function() { }

}


var app = new class_App();



// FIREBASE INIT 
var myDataRef = new Firebase('https://zvdju3fkxgo.firebaseio-demo.com/');

// ON DOM EVENTS -> TRIGGER FIREBASE ACTION
$('#messageInput').keypress(function (e) {
if (e.keyCode == 13) {
var name = $('#nameInput').val();
var text = $('#messageInput').val();
myDataRef.push({name: name, text: text});
$('#messageInput').val('');
}
});

// FIREBASE EVENTS
myDataRef.on('child_added', function(snapshot) {
var message = snapshot.val();
displayChatMessage(message.name, message.text);
});

// EVENT CALLBACK
function displayChatMessage(name, text) {
$('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
$('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
};
