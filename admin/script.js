document.getElementById('createPost').addEventListener('click', function() {
    const title = document.getElementById('title').value;
    const content = document.getElementById('content').value;
    const imageUrl = document.getElementById('imageUrl').value;
  
    if (title && content && imageUrl) {
      const postList = document.querySelector('.post-list');
      
      const postItem = document.createElement('div');
      postItem.classList.add('post-item');
      
      const postTitle = document.createElement('h3');
      postTitle.textContent = title;
      
      const postContent = document.createElement('p');
      postContent.textContent = content;
  
      const postImage = document.createElement('img');
      postImage.src = imageUrl; // Use the URL provided by the user
  
      const editButton = document.createElement('button');
      editButton.textContent = 'Edit';
      // Add edit functionality here
      
      const deleteButton = document.createElement('button');
      deleteButton.textContent = 'Delete';
      // Add delete functionality here
  
      postItem.appendChild(postTitle);
      postItem.appendChild(postImage);
      postItem.appendChild(postContent);
      postItem.appendChild(editButton);
      postItem.appendChild(deleteButton);
      
      postList.appendChild(postItem);
  
      // Clear form after creating post
      document.getElementById('title').value = '';
      document.getElementById('content').value = '';
      document.getElementById('imageUrl').value = ''; // Reset image URL input
    } else {
      alert('Please fill in the title, content, and image URL.');
    }
  });
  