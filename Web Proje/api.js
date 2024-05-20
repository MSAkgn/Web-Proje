document.addEventListener('DOMContentLoaded', function() {
    var selectElement = document.getElementById('categorySelect');

    selectElement.addEventListener('change', function() {
        var selectedFilm = selectElement.value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var movies = response.results;
                    var moviesHTML = '';

                    for (var i = 0; i < movies.length; i++) {
                        var movie = movies[i];
                        moviesHTML += '<div class="col-md-4">' +
                                          '<div class="card mb-4 shadow-sm">' +
                                              '<img src="https://image.tmdb.org/t/p/w500' + movie.poster_path + '" class="card-img-top" alt="' + movie.title + '">' +
                                              '<div class="card-body">' +
                                                  '<h5 class="card-title">' + movie.title + '</h5>' +
                                                  '<p class="card-text">Puan: ' + movie.vote_average + '</p>' +
                                                  '<p class="card-text">Yıl: ' + movie.release_date.substring(0, 4) + '</p>' +
                                                  '<p class="card-text">' + movie.overview + '</p>' +
                                              '</div>' +
                                          '</div>' +
                                      '</div>';
                    }

                    document.querySelector('.movies').innerHTML = moviesHTML;
                } else {
                    console.error('Bir hata oluştu: ' + xhr.status);
                }
            }
        };

        xhr.open('GET', 'https://api.themoviedb.org/3/search/movie?api_key=0bda45e1ab7ad57bda48766d7e2642ea&query=' + selectedFilm);
        xhr.send();
    });
});
