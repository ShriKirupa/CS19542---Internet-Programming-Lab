$(document).ready(function() {
    $('#search').on('input', function() {
        let keyword = $(this).val();
        if (keyword.length > 0) {
            $.ajax({
                url: '../php/search.php',
                type: 'POST',
                data: { keyword: keyword },
                success: function(response) {
                    let snippets = JSON.parse(response);
                    let snippetsList = '';
                    snippets.forEach(snippet => {
                        snippetsList += `<li class="list-group-item">${snippet.title}</li>`;
                    });
                    $('#snippets-list').html(snippetsList);
                }
            });
        } else {
            $('#snippets-list').empty();
        }
    });
});
