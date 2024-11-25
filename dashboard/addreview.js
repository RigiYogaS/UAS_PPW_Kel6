document.getElementById('submitReview').addEventListener('click', function() {
    const reviewText = document.getElementById('reviewInput').value;
  
    if (reviewText.trim() !== "") {
        const newReview = document.createElement('div');
        newReview.classList.add('review');
  
        const newImg = document.createElement('img');
        newImg.src = '/imageLandingPage/love.jpeg'; 
        newImg.alt = 'Profile Picture';
  
        const newReviewText = document.createElement('div');
        newReviewText.classList.add('review-text');
  
        const newName = document.createElement('h4');
        newName.textContent = 'User'; // Default name
  
        const newReviewContent = document.createElement('p');
        newReviewContent.textContent = reviewText;
  
        newReviewText.appendChild(newName);
        newReviewText.appendChild(newReviewContent);
        newReview.appendChild(newImg);
        newReview.appendChild(newReviewText);
  
        document.getElementById('reviewContainer').appendChild(newReview);
        document.getElementById('reviewInput').value = ""; // Clear input after submission
    }
  });