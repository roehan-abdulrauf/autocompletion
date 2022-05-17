// window.onload = () => {


function search(searcher) {
    console.log(searcher);
    fetchSearchData(searcher);
}

function fetchSearchData(searcher) {

    var formData = new FormData();
    formData.append('searcher', searcher)

    fetch('search&json.php', {
        method: 'POST',
        body: formData
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res))
        .catch(e => console.error('Error:' + e))

}


function viewSearchResult(data) {

    if (data) {
        const dataViewer = document.querySelector('.box-container');

        dataViewer.innerHTML = "";

        for (let i = 0; i < data.length; i++) {

            // console.log(data[i]);

            const div = document.createElement('div');

            div.innerHTML = `
            <div class="box">
            <div class="image">
            <a href=\"element.php?id=`+ data[i].id + `\"><img src="` + data[i].anime_img + `" alt=""></a>
            </div>
            <div class="content">
            <div>
            <a href=\"element.php?id=`+ data[i].id + `\"><h3>` + data[i].anime + `</h3></a></div>
            <div class="eps_rate">`+ data[i].episodes + ` <span>Eps</span> <span>-</span> <span>Rate:</span> ` + data[i].rate + ` <i class='bx bxs-star' style='color:#e4d00b'  ></i></div><br>
            </div>
            </div>
            `;

            dataViewer.appendChild(div);
        }
    } else {
        document.write("<div>Let's print an additional DIV here</div>");
    }
}

var submitHandler = function () {
    //do stuff
    return false;
}
// }