document.querySelectorAll('.film p i').forEach(function(icon) {
    icon.addEventListener('click', function() {
        const isStar = this.classList.contains('bxs-star');
        const isHeart = this.classList.contains('bxs-heart');

        if (isStar) {
            if (this.classList.contains('active-star')) {
                this.classList.remove('active-star'); 
                this.style.color = '#ECDFCC'; 
            } else {
                this.classList.add('active-star'); 
                this.style.color = '#FFD700';
            }
        } else if (isHeart) {
            if (this.classList.contains('active-heart')) {
                this.classList.remove('active-heart');
                this.style.color = '#ECDFCC'; 
            } else {
                this.classList.add('active-heart'); 
                this.style.color = '#FF0000'; 
            }
        }
    });
});
