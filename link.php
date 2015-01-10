<?php
include "config/koneksi.php";
include "config/fungsi_indotgl.php";
include "config/class_paging.php";
include "config/kode_auto.php";
include "config/fungsi_combobox.php";
include "config/fungsi_nip.php";

    if ($_SESSION['level']=='1'){
	if($_GET['module']=="adm"){
	include "modul/admin/admin.php";
	}
        else if($_GET['module']=="pengajuan-detail"){
        include "modul/admin/pengajuan-detail.php";
        }
            else if($_GET['module']=="konfirmasi-detail"){
            include "modul/admin/konfirmasi-detail.php";
            }
                else if($_GET['module']=="auditor-detail"){
                include "modul/admin/auditor-detail.php";
                }
                    else if($_GET['module']=="pengajuan"){
                    include "modul/admin/pengajuan.php";
                    }
                        else if($_GET['module']=="pengajuan-edit") {
                        include "modul/admin/pengajuan-edit.php";
                        }
                            else if($_GET['module']=="pembayaran") {
                            include "modul/admin/pembayaran.php";
                            }
                                else if($_GET['module']=="pembayaran-edit") {
                                include "modul/admin/pembayaran-edit.php";
                                }
                                    else if($_GET['module']=="data-user") {
                                    include "modul/admin/user.php";
                                    }
                                        else if($_GET['module']=="kontrak") {
                                        include "modul/admin/kontrak.php";
                                        }
                                            else if($_GET['module']=="kategori") {
                                            include "modul/admin/kategori.php";
                                            }
                                                else if($_GET['module']=="tambah-user") {
                                                include "modul/admin/user-tambah.php";
                                                }
                                                    else if($_GET['module']=="edit-user") {
                                                    include "modul/admin/user-edit.php";
                                                    }
                                                        else if($_GET['module']=="detail-user") {
                                                        include "modul/admin/user-detail.php";
                                                        }
    }
	
    if ($_SESSION['level']=='2'){
	if($_GET['module']=="adt"){
        include "modul/auditor/auditor.php";
	}
            else if($_GET['module']=="mhs"){
            include "modul/mahasiswa/mahasiswa.php";
            }
                else if($_GET['module']=="laporan"){
                include "laporan.php";
                }
                    else if($_GET['module']=="pengajuan-detail"){
                    include "modul/auditor/pengajuan-detail.php";
                    }
                        else if($_GET['module']=="edit-akun"){
                        include "modul/auditor/edit-akun.php";
                        }
                            else if($_GET['module']=="laporan"){
                            include "modul/auditor/laporan.php";
                            }
                    
        }
 
    if ($_SESSION['level']=='3'){
        if($_GET['module']=="usr"){
	include "modul/user/user.php";
	}
            else if($_GET['module']=="status"){
            include "modul/user/status.php";
            }
                else if($_GET['module']=="laporan"){
                include "laporan.php";
                }
                    else if($_GET['module']=="pengajuan"){
                    include "modul/user/pengajuan.php";
                    }
                        else if($_GET['module']=="howto"){
                        include "modul/tamu/carapengajuan.php";
                        }
                            else if($_GET['module']=="objeklist"){
                            include "modul/tamu/objeklist.php";
                            }
                                else if($_GET['module']=="tagihan"){
                                include "modul/user/tagihan.php";
                                }
                                    else if($_GET['module']=="sukses"){
                                    include "modul/user/pengajuan-sukses.php";
                                    }
                                        else if($_GET['module']=="tentang"){
                                        include "modul/tamu/tentangsmi.php";
                                        }
                                            else if($_GET['module']=="konfirm"){
                                            include "modul/user/sukses-konfirm.php";
                                            }
                                                else if($_GET['module']=="detail"){
                                                include "modul/tamu/objekdetail.php";
                                                }
                                                    else if($_GET['module']=="konfirmasi"){
                                                    include "modul/user/konfirmasi.php";
                                                    }
                                                        else if($_GET['module']=="invoice"){
                                                        include "modul/user/invoice.php";
                                                        }
                                                            else if($_GET['module']=="add-galery"){
                                                            include "modul/user/tambah-galery.php";
                                                            }
                                                                else if($_GET['module']=="profile"){
                                                                include "modul/user/profile.php";
                                                                }
                                                                    else if($_GET['module']=="passwd"){
                                                                    include "modul/user/ganti-pass.php";
                                                                    }
                                                                        else if($_GET['module']=="galery"){
                                                                        include "modul/user/galery.php";
                                                                        }
                     
                     
                     
                       
    } 
    
    if ($_SESSION['level']==null){
        if($_GET['module']==""){
	include "modul/tamu/tamu-index.php";
	}
            else if($_GET['module']=="tentang"){
            include "modul/tamu/tentangsmi.php";
            }
                else if($_GET['module']=="howto"){
                include "modul/tamu/carapengajuan.php";
                }
                    else if($_GET['module']=="objeklist"){
                    include "modul/tamu/objeklist.php";
                    }
                        else if($_GET['module']=="login"){
                        include "modul/tamu/tamu-login.php";
                        }
                            else if($_GET['module']=="detail"){
                            include "modul/tamu/objekdetail.php";
                            }
                                else if($_GET['module']=="register"){
                                include "modul/tamu/tamu-register.php";
                                }
                                    else if($_GET['module']=="pengajuan"){
                                    include "404.php";
                                    }
                                        else if($_GET['module']=="sukses"){
                                        include "modul/tamu/register-sukses.php";
                                        }
                            
                    
                    
    }
    
?>