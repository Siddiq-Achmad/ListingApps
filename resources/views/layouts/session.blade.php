<script>

 @if (Session::has('success'))
        Toastify({
            text: "{{ Session::get('success') }}",
            duration: 3000,
            close: true,
            gravity: "bottom", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            className: "bg-success"
        }).showToast();
    @elseif (Session::has('info'))
       Toastify({
           text: "{{ Session::get('info') }}",
           duration: 3000,
           close: true,
           gravity: "bottom", // `top` or `bottom`
           position: "right", // `left`, `center` or `right`
           stopOnFocus: true, // Prevents dismissing of toast on hover
           className: "bg-info"
       }).showToast();
    @elseif (Session::has('warning'))
       Toastify({
           text: "{{ Session::get('warning') }}",
           duration: 3000,
           close: true,
           gravity: "bottom", // `top` or `bottom`
           position: "right", // `left`, `center` or `right`
           stopOnFocus: true, // Prevents dismissing of toast on hover
           className: "bg-warning"
       }).showToast();
    @elseif (Session::has('error'))
       Toastify({
           text: "{{ Session::get('error') }}",
           duration: 3000,
           close: true,
           gravity: "bottom", // `top` or `bottom`
           position: "right", // `left`, `center` or `right`
           stopOnFocus: true, // Prevents dismissing of toast on hover
           className: "bg-danger"
       }).showToast();
    @elseif(session()->has('message'))
        Toastify({
            text: "{{ session()->get('message') }}",
            duration: 3000,
            close: true,
            gravity: "bottom", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            }
        }).showToast();
    @else
       
    @endif
</script>