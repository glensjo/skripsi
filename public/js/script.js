document.addEventListener('DOMContentLoaded', function () {
  const submitForm = document.getElementById('form');
  const formSearch = document.getElementById('find');

  submitForm.addEventListener('submit', function (event) {
    event.preventDefault();
    addBook();
    submitForm.reset();
  });

  formSearch.addEventListener('submit', function (event) {
    event.preventDefault();
    const inputSearch = document.getElementById("key").value;
    bookSearch(inputSearch);
    formSearch.reset();
  })

  if (isStorageExist()) {
    loadDataFromStorage();
  }
});

function addBook() {
  const textTitle = document.getElementById('title').value;
  const textAuthor = document.getElementById('author').value;
  const timestamp = document.getElementById('year').value;
  const complete = document.getElementById('isComplete');

  if (complete.checked == true) {
    const generatedID = generateId();
    const bookObject = generateBookObject(generatedID, textTitle, textAuthor, timestamp, true);
    books.push(bookObject);
  } else {
    const generatedID = generateId();
    const bookObject = generateBookObject(generatedID, textTitle, textAuthor, timestamp, false);
    books.push(bookObject);
  }
 
  document.dispatchEvent(new Event(RENDER_EVENT));
  saveData();
}

function generateId() {
  return +new Date();
}
 
function generateBookObject(id, title, author, timestamp, isCompleted) {
  return {
    id,
    title,
    author,
    timestamp,
    isCompleted
  }
}

const books = [];
const RENDER_EVENT = 'render-book';

document.addEventListener(RENDER_EVENT, function () {
  const uncompletedBOOKList = document.getElementById('books');
  uncompletedBOOKList.innerHTML = '';

  const completedBOOKList = document.getElementById('completed-books');
  completedBOOKList.innerHTML = '';
  
  for (const bookItem of books) {
    const bookElement = makeBook(bookItem);

    if (!bookItem.isCompleted) {
      uncompletedBOOKList.append(bookElement);
    }
    else {
      completedBOOKList.append(bookElement);    
    }  
  }
});

function makeBook(bookObject) {
  const textTitle = document.createElement('h3');
  textTitle.innerText = bookObject.title;

  const textAuthor = document.createElement('p');
  textAuthor.innerText = bookObject.author;
 
  const textTimestamp = document.createElement('p');
  textTimestamp.innerText = bookObject.timestamp;
 
  const textContainer = document.createElement('div');
  textContainer.classList.add('inner');
  textContainer.append(textTitle, textAuthor, textTimestamp);
 
  const container = document.createElement('div');
  container.classList.add('item', 'shadow');
  container.append(textContainer);
  container.setAttribute('id', `book-${bookObject.id}`);
 
  if (bookObject.isCompleted) {
    const undoButton = document.createElement('button');
    undoButton.classList.add('undo-button');
 
    undoButton.addEventListener('click', function () {
      undoBookFromCompleted(bookObject.id);
    });
 
    const trashButton = document.createElement('button');
    trashButton.classList.add('trash-button');
 
    trashButton.addEventListener('click', function () {
      removeBookFromCompleted(bookObject.id);
    });
 
    container.append(undoButton, trashButton);
  } else {
    const checkButton = document.createElement('button');
    checkButton.classList.add('check-button');
    
    checkButton.addEventListener('click', function () {
      addBookToCompleted(bookObject.id);
    });
    
    const trashButton = document.createElement('button');
    trashButton.classList.add('trash-button');
 
    trashButton.addEventListener('click', function () {
      removeBookFromCompleted(bookObject.id);
    });
 
    container.append(checkButton, trashButton);
  }
 
  return container;
}

function addBookToCompleted (bookId) {
  const bookTarget = findBook(bookId);
 
  if (bookTarget == null) return;
 
  bookTarget.isCompleted = true;
  document.dispatchEvent(new Event(RENDER_EVENT));
  saveData();
}

function findBook(bookId) {
  for (const bookItem of books) {
    if (bookItem.id === bookId) {
      return bookItem;
    }
  }

  return null;
}

function removeBookFromCompleted(bookId) {
  const bookTarget = findBookIndex(bookId);
 
  if (bookTarget === -1) return;
 
  books.splice(bookTarget, 1);
  document.dispatchEvent(new Event(RENDER_EVENT));
  saveData();

  alert('The book has been removed from the list!')
}
 
 
function undoBookFromCompleted(bookId) {
  const bookTarget = findBook(bookId);
 
  if (bookTarget == null) return;
 
  bookTarget.isCompleted = false;
  document.dispatchEvent(new Event(RENDER_EVENT));
  saveData();
}

function findBookIndex(bookId) {
  for (const index in books) {
    if (books[index].id === bookId) {
      return index;
    }
  }
 
  return -1;
}

function saveData() {
  if (isStorageExist()) {
    const parsed = JSON.stringify(books);
    localStorage.setItem(STORAGE_KEY, parsed);
    document.dispatchEvent(new Event(SAVED_EVENT));
  }
}

const SAVED_EVENT = 'saved-book';
const STORAGE_KEY = 'BOOK_APPS';
 
function isStorageExist() /* boolean */ {
  if (typeof (Storage) === undefined) {
    alert('Browser kamu tidak mendukung local storage');
    return false;
  }
  
  return true;
}

document.addEventListener(SAVED_EVENT, function () {
  console.log(localStorage.getItem(STORAGE_KEY));
});

function loadDataFromStorage() {
  const serializedData = localStorage.getItem(STORAGE_KEY);
  let data = JSON.parse(serializedData);
 
  if (data !== null) {
    for (const book of data) {
      books.push(book);
    }
  }
 
  document.dispatchEvent(new Event(RENDER_EVENT));
}

function bookSearch(keyword) {
  const filter = keyword.toUpperCase();
  const titles = document.getElementsByTagName("h3");

  for (let i = 0; i < titles.length; i++) {
      const titlesText = titles[i].textContent || titles[i].innerText;

      if (titlesText.toUpperCase().indexOf(filter) > -1) {
          titles[i].closest(".item").style.display = "";
      } else {
          titles[i].closest(".item").style.display = "none";
      }
  }
}