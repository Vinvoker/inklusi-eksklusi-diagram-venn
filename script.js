function hitung() {
    var s = 100;
    var a = parseInt(document.getElementById('a').value);
    var b = parseInt(document.getElementById('b').value);
    var c = parseInt(document.getElementById('c').value);
    var ab = parseInt(document.getElementById('ab').value);
    var ac = parseInt(document.getElementById('ac').value);
    var bc = parseInt(document.getElementById('bc').value);
    var abc = parseInt(document.getElementById('abc').value);
    var notabc = parseInt(document.getElementById('notabc').value);

    let jumlahKosong = 0;

    var arr = [s,a,b,c,ab,ac,bc,abc,notabc];
    for (var i = 0; i < arr.length; i++) {
        if (isNaN(arr[i])) {
            arr[i] = 0;
            var kosong = i;
            jumlahKosong++;
        }
    }

    if (jumlahKosong != 1) {
        alert("Kolom yang tidak diisi harus 1 buah!");
        return;
    } else {
        let ans = arr[1] + arr[2] + arr[3] - arr[4] - arr[5] - arr[6] + arr[7] - arr[0] + arr[8];
        // Menggunakan rumus persamaan linear 1 variabel
        // {Semesta} - !{ABC} = {A} + {B} + {C} - {AB} - {AC} - {BC} + {ABC}

        if (kosong == 1 || kosong == 2 || kosong == 3 || kosong == 7 || kosong == 8) {
            arr[kosong] = -1 * ans;
        } else {
            arr[kosong] = ans;
        }

        a = document.getElementById('ansA').innerHTML = arr[1] - arr[4] - arr[5] + arr[7];
        b = document.getElementById('ansB').innerHTML = arr[2] - arr[4] - arr[6] + arr[7];
        c = document.getElementById('ansC').innerHTML = arr[3] - arr[5] - arr[6] + arr[7];
        ab = document.getElementById('ansAB').innerHTML = arr[4] - arr[7];
        ac = document.getElementById('ansAC').innerHTML = arr[5] - arr[7];
        bc = document.getElementById('ansBC').innerHTML = arr[6] - arr[7];
        abc = document.getElementById('ansABC').innerHTML = arr[7];
        notabc = document.getElementById('ansnotABC').innerHTML = arr[8];

        document.getElementsByClassName('a')[0].innerHTML = a;
        document.getElementsByClassName('b')[0].innerHTML = b;
        document.getElementsByClassName('c')[0].innerHTML = c;
        document.getElementsByClassName('ab')[0].innerHTML = ab;
        document.getElementsByClassName('ac')[0].innerHTML = ac;
        document.getElementsByClassName('bc')[0].innerHTML = bc;
        document.getElementsByClassName('abc')[0].innerHTML = abc;
        document.getElementsByClassName('s')[0].innerHTML = 'S = { 100 }';
        document.getElementsByClassName('notabc')[0].innerHTML = notabc;


        document.getElementById('ansAorB').innerHTML = a + b + ab;
        document.getElementById('ansAorC').innerHTML = a + c + ac;
        document.getElementById('ansBorC').innerHTML = b + c + bc;
        document.getElementById('ansAorBorC').innerHTML = s - notabc;
    }
}