<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plindrome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="card">
                    <div class="card-body">
                        <form id="form" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Masukan Kata</label>
                                <input type="text" class="form-control" name="inputText" placeholder="masukkan Kata">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary btn-cek mb-2" type="button">Cek Kata</button>
                            </div>
                            <!-- <div class="alert alert-success mt-3" role="alert">
                                    <span id="valid">xxxx</span>
                            </div> -->
                            <div id="liveAlertPlaceholder"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
    $('.btn-cek').on('click', function() {
        if ($('[name="inputText"]').val().trim() == '') {
            alert('Silahkan Isi Data Dulu','warning');
        } else {
            var palindrome = checkKata($('[name="inputText"]').val());
            if (palindrome == true) {
                alert($('[name="inputText"]').val() + ' termasuk palindrome', 'success')
            } else {
                alert($('[name="inputText"]').val() + ' termasuk bukan palindrome', 'danger')
            }
                
            
        }
    });
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

    const alert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
    }

    function checkKata(string) {
        string = string.toLowerCase();
        var charactersArr = string.split("");
        var validCharacters = "abcdefghijklmnopqrstuvwxyz".split("");

        var lettersArr = [];
        charactersArr.forEach((char) => {
            if (validCharacters.indexOf(char) > -1) lettersArr.push(char);
        });

        return lettersArr.join("") === lettersArr.reverse().join("");
    }
    </script>
</body>

</html>