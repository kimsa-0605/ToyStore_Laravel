const userAvatar = document.getElementById('user-avatar-header');
const profileBlock = document.getElementById('profile-block');
profileBlock.style.display = 'none';
let countClick = 0;
userAvatar.addEventListener('click', () => {
    countClick++;
    if (countClick % 2 !== 0) {
        profileBlock.style.display = 'block';
    } else {
        profileBlock.style.display = 'none';
    }
});
