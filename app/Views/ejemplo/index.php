<?= $this->extend('templates/admin_template'); ?>

<?= $this->section('css'); ?>
<!-- jsGrid -->
<link rel="stylesheet" href="<?= site_url('plugins/jsgrid/jsgrid.min.css'); ?>">
<link rel="stylesheet" href="<?= site_url('plugins/jsgrid/jsgrid-theme.min.css'); ?>">
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<!-- jsGrid -->
<script src="<?= site_url('plugins/jsgrid/demos/db.js'); ?>"></script>
<script src="<?= site_url('plugins/jsgrid/jsgrid.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
    var db2 = {
        loadData: function(filter) {
            return $.grep(this.clientes, function(client) {
                return (!filter.Name || client.Name.indexOf(filter.Name) > -1) &&
                    (filter.Age === undefined || client.Age === filter.Age) &&
                    (!filter.Address || client.Address.indexOf(filter.Address) > -1) &&
                    (!filter.Country || client.Country === filter.Country) &&
                    (filter.Married === undefined || client.Married === filter.Married);
            });
        },

        insertItem: function(insertingClient) {
            this.clientes.push(insertingClient);
        },

        updateItem: function(updatingClient) {},

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clientes);
            this.clientes.splice(clientIndex, 1);
        }

    };

    db2.clientes = [{
            "id": 1,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 2,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
        {
            "id": 3,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 4,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
        {
            "id": 5,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 6,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
        {
            "id": 7,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 8,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
        {
            "id": 9,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 10,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
        {
            "id": 11,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 12,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
        {
            "id": 13,
            "nombre": "Yuri",
            "rfc": "COPY8610033V5",
            "direccion": "Calle Honestidad",
            "telefono": "8341437535",
            "email": "copy.086@gmail.com",
            "contacto": "Diego",
        },
        {
            "id": 14,
            "nombre": "PB Staff y Servicios",
            "rfc": "PSS1305159CA",
            "direccion": "Calle Bravo",
            "telefono": "8324587142",
            "email": "pbstaff@gmail.com",
            "contacto": "Alejandro",
        },
    ];

    $(function() {

        $("#jstable").jsGrid({
            height: "100%",
            width: "100%",

            sorting: false,
            paging: true,

            data: db2.clientes,

            fields: [{
                    name: "nombre",
                    type: "text",
                    width: 100
                },
                {
                    name: "rfc",
                    type: "text",
                    width: 80
                },
                {
                    name: "direccion",
                    type: "text",
                    width: 100
                },
                {
                    name: "telefono",
                    type: "text",
                    width: 50
                },
                {
                    name: "email",
                    type: "text",
                    width: 100
                },
                {
                    name: "contacto",
                    type: "text",
                    width: 80
                }
            ]
        });
    });
</script>
<?= $this->endSection(); ?>

<?= $this->section('titulo'); ?>
<?= esc($title) ?>
<?= $this->endSection(); ?>

<?= $this->section('breadcrumb'); ?>
<?= esc($subtitle) ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">jsGrid</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jstable"></div>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
</section>

<?= $this->endSection(); ?>