function deleteProfileImage() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://222410102036.pbw.ilkom.unej.ac.id/uas/?controller=profile&method=deleteImage', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('profileImage').src = 'public/img/profile/profile.jpg';
            
        }
    };
    xhr.send();
}
