import "./bootstrap";
import.meta.glob(["../images/**"]);
// resources/js/app.js
import 'datatables.net-bs5/js/dataTables.bootstrap5';
import 'datatables.net-responsive-bs5';
import $ from 'jquery';

$(document).ready(function() {
    $('#datatable').DataTable();
});