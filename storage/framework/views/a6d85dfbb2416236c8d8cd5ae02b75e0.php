
<script>
<?php if(Session::has('success')): ?>
Toastify({
    text: "<?php echo e(Session::get('success')); ?>",
    duration: 3000,
    close: true,
    gravity: "bottom", // `top` or `bottom`
    position: "right", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    className: "bg-success"
}).showToast();
<?php elseif(Session::has('info')): ?>
Toastify({
   text: "<?php echo e(Session::get('info')); ?>",
   duration: 3000,
   close: true,
   gravity: "bottom", // `top` or `bottom`
   position: "right", // `left`, `center` or `right`
   stopOnFocus: true, // Prevents dismissing of toast on hover
   className: "bg-info"
}).showToast();
<?php elseif(Session::has('warning')): ?>
Toastify({
   text: "<?php echo e(Session::get('warning')); ?>",
   duration: 3000,
   close: true,
   gravity: "bottom", // `top` or `bottom`
   position: "right", // `left`, `center` or `right`
   stopOnFocus: true, // Prevents dismissing of toast on hover
   className: "bg-warning"
}).showToast();
<?php elseif(Session::has('error')): ?>
Toastify({
   text: "<?php echo e(Session::get('error')); ?>",
   duration: 3000,
   close: true,
   gravity: "bottom", // `top` or `bottom`
   position: "right", // `left`, `center` or `right`
   stopOnFocus: true, // Prevents dismissing of toast on hover
   className: "bg-danger"
}).showToast();
<?php elseif(session()->has('message')): ?>
Toastify({
    text: "<?php echo e(session()->get('message')); ?>",
    duration: 3000,
    close: true,
    gravity: "bottom", // `top` or `bottom`
    position: "right", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    style: {
        background: "linear-gradient(to right, #00b09b, #96c93d)",
    }
}).showToast();
<?php else: ?>

<?php endif; ?>
</script><?php /**PATH C:\Users\Ricky\Herd\ListingApps\resources\views/layouts/message.blade.php ENDPATH**/ ?>