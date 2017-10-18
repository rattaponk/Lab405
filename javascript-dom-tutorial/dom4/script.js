// grap form, item list, and search box
var form = document.getElementById('addForm');
var itemList = document.getElementById('items');
var filter = document.getElementById('filter')

// Add item - listen to 'submit' event on form
form.addEventListener('submit', addItem);
// Remove item - listen to 'click' event on item list
itemList.addEventListener('click', removeItem);
// Filter items - listen to 'keyup' event on search box
filter.addEventListener('keyup', filterItems);

// Add item
function addItem(e){
  // Prevent default submit behavior
  e.preventDefault();

  // Get input value from input text box
  var newItem = document.getElementById('item').value;
  
  // reset form after getting value
  form.reset;

  // Create new <li> element
  var li = document.createElement('li');
  // Add class
  li.className = 'list-group-item';
  // Add text node with the input value
  li.appendChild(document.createTextNode(newItem));

  // Create del button element
  var deleteBtn = document.createElement('button');

  // Add classes to del button
  deleteBtn.className = 'btn btn-danger btn-sm float-right delete';

  // Append text node
  deleteBtn.appendChild(document.createTextNode('x'));

  // Append button to <li>
  li.appendChild(deleteBtn);

  // Append <li> to list
  itemList.appendChild(li);
}

// Remove item
function removeItem(e){
  // check if the DOM firing the event is 'delete' button
  if(e.target.classList.contains('delete')){
    // call and check answer from 'confirm' dialog
    if(confirm('Are You Sure?')){
      // get parent element of the delete button
      var li = e.target.parentElement;   
      // remote <li>
      itemList.removeChild(li);
    }
  }
}

// Filter Items
function filterItems(e){
  // get filtered text and convert to lowercase
  var filteredText = e.target.value.toLowerCase();
  // Get all <li> elements
  var items = itemList.getElementsByTagName('li');
  
  // Convert to an array of <li> and check each element
  Array.from(items).forEach( function(item) {
    // get text content from <li>
    var itemName = item.firstChild.textContent;
    // check if text content contains 
    if(itemName.toLowerCase().indexOf(filteredText) != -1){
      // if match 
      item.style.display = 'block';
    } else {
      // if NOT match
      item.style.display = 'none';
    }
  });
}