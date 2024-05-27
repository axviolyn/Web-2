@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blank Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <!DOCTYPE html>
                    <html lang="de">
                 <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Profil</title>
                    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
                    <style>
                        /* CSS Variables */
                        :root {
                        --blue: #457b8c;
                        --gray: #f0f0f0;
                        --red: #ce4034;
                        --green: #08b8b8;
                        --primary-font-color: #798796;
                        --secondary-font-color: #595556;
                        --primary-font: 'PT Sans', sans-serif;
                        --secondary-font: 'Oswald', sans-serif;
                        }

                        /* General Styles */
                        body {
                        font-family: var(--primary-font);
                        color: var(--primary-font-color);
                        }

                        h1 {
                        font-family: var(--secondary-font);
                        text-transform: uppercase;
                        color: var(--primary-font-color);
                        font-size: 2.5rem;
                        }

                        h5 {
                        font-family: var(--secondary-font);
                        text-transform: uppercase;
                        color: var(--primary-font-color);
                        font-size: 1.563rem;
                        }

                        .fullwidth {
                        max-width: 100%;
                        height: auto;
                        }

                        .-spacing-a {
                        margin-top: 3.125rem;
                        }

                        .-spacing-b {
                        margin-top: 1.875rem;
                        }

                        .-typo-copy {
                        margin-bottom: 1.875rem;
                        color: var(--secondary-font-color);
                        font-size: 1rem;
                        font-family: var(--primary-font);
                        }

                        .-typo-copy--blue {
                        color: var(--primary-font-color);
                        }

                        .profile-image {
                        overflow: hidden;
                        position: relative;
                        }

                        .profile-image:hover .edit-profile-image {
                        opacity: 1;
                        }

                        .edit-profile-image {
                        width: auto;
                        height: 100%;
                        position: absolute;
                        top: 0;
                        left: 0.9375rem;
                        right: 0.9375rem;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        padding: 0.625rem;
                        cursor: pointer;
                        opacity: 0;
                        background: linear-gradient(to bottom, rgba(231,211,116,0.7) 0%, rgba(8,184,184,0.7) 100%);
                        transition: all 0.2s ease-in-out;
                        }

                        .edit-profile-image__information {
                        color: #FFF;
                        font-size: 1.125rem;
                        }

                        .edit-profile-image__label {
                        margin-left: 0.5rem;
                        display: inline-block;
                        font-family: var(--primary-font);
                        }

                        .btn {
                        border: none;
                        background: #FFF;
                        border-radius: 0;
                        padding: 0.875rem 0.625rem;
                        cursor: pointer;
                        }

                        .btn__label {
                        font-family: var(--primary-font);
                        margin-left: 0.5rem;
                        }

                        .btn--green {
                        background: var(--green);
                        color: #FFF;
                        }
                    </style>
                 </head>

                 <body>
                    <div class="container">
                        <div class="row -spacing-a">
                        <div class="col-md-12">
                            <h1>Profil</h1>
                        </div>
                        </div>
                        <div class="row -spacing-a">
                        <div class="col-md-4">
                            <div class="profile-image">
                            <img src="https://i.pinimg.com/736x/0d/2f/fc/0d2ffcc1ec47095a84eb646bbdf12d9e.jpg" class="fullwidth"/>
                            <div class="edit-profile-image">
                                <span class="edit-profile-image__information">
                                <span class="fa fa-camera"></span>
                                <span class="edit-profile-image__label">
                                    Profil
                                </span>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5>My Biodata</h5>
                            <div class="row -spacing-b">
                            <div class="col-md-3">
                                <p class="-typo-copy">Nama</p>
                                <p class="-typo-copy">Tempat Lahir</p>
                                <p class="-typo-copy">Tanggal Lahir</p>
                                <p class="-typo-copy">E-Mail Adresse</p>
                            </div>
                            <div class="col-md-3">
                                <p class="-typo-copy -typo-copy--blue">Nurhayati</p>
                                <p class="-typo-copy -typo-copy--blue">Bogor</p>
                                <p class="-typo-copy -typo-copy--blue">19.05.2004</p>
                                <p class="-typo-copy -typo-copy--blue">lynanaira@gmail.com</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                 </body>
</html>


                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    Start creating your amazing application!
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
