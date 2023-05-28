let limit = 1;
$.ajax({
    method: 'GET',
    url: 'https://api.api-ninjas.com/v1/facts?limit=' + limit,
    headers: { 'X-Api-Key': 'DNG/rDfDPQ5c3gvqXAksvg==SUVW34xmujBid0Vc'},
    contentType: 'application/json',
    success: function(result) {
        result.forEach(function(fact) {
            $('#fact').append('<p>' + fact.fact + '</p>');
        });
    },
    error: function ajaxError(jqXHR) {
        console.error('Error: ', jqXHR.responseText);
    }
});