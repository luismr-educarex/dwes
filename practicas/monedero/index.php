
<HTML>
<HEAD>
	 <meta charset="UTF-8">
<TITLE>Actividad 1 - Unidad 4 - Curso Iniciación de PHP 5 - Monedero</TITLE>
	<STYLE  TYPE="text/css">
		input
			{
			font-family : Arial, Helvetica;
			font-size : 14;
			color : #000033;
			font-weight : normal;
   			border-color : #999999;
   			border-width : 1;
   			background-color : #FFFFFF;
			}
	</style>
</HEAD>



<BODY bgcolor="#C0C0C0" link="white" vlink="white" alink="white">

<?php

require 'monedero.php';
require 'funciones.php';

$mi_monedero = new monedero;
$mi_monedero->cargar_monedero();
$lista_conceptos="";


if(isset($_REQUEST['operacion'])){

	if ($_REQUEST['operacion']=="alta")
	{
		if(!empty($_REQUEST['concepto'])){

			$mi_monedero->alta_concepto($_REQUEST['concepto'],$_REQUEST['fecha'],$_REQUEST['importe']);
		
		}else{
			echo "Es obligatorio el concepto";
		}
	}
	elseif ($_REQUEST['operacion']=="ordenar")
	{
			$lista_conceptos=$mi_monedero->obtenerConceptos($_REQUEST['campo']);
	}
	elseif ($_REQUEST['operacion']=="buscar")
	{
			if($_REQUEST['buscar_texto']!=""){
				$mi_monedero->buscarConceptos($_REQUEST['buscar_texto']);	
			}
			
	}
	elseif ($_REQUEST['operacion']=="modifica")
	{

		$id_elemento=$_REQUEST['id'];
		$nuevoConcepto=$_REQUEST['concepto'];
		$nuevaFecha=$_REQUEST['fecha'];
		$nuevoImporte=$_REQUEST['importe'];

	    $mi_monedero->modificar($id_elemento,$nuevoConcepto,$nuevaFecha,$nuevoImporte);

	}
	elseif ($_REQUEST['operacion']=="borrar")
	{
		 $mi_monedero->borrar($_REQUEST['id']);
	}

}

?>


<center>
<TABLE border="0" align="center" cellspacing="3" cellpadding="3" width="600" bgcolor="#669900">
<TR>	
	<td width=30><img src=cerdito.gif></td>
	<TD align=center><FONT size="6" color="white" face="arial, helvetica">Monedero</FONT></TD>
	<td width=30><img src=cerdito.gif></td>
</TR></TABLE><P>

﻿<TABLE BORDER=0 cellspacing=2 cellpadding=2 align="center" width="600">
			 	<TR>
					<TH bgcolor=#669900 width=300><FONT face="arial, helvetica">
					<A href= index.php?operacion=ordenar&campo=concepto alt="Ordenar por Concepto">
						Concepto</A></FONT></TH>
					<TH bgcolor=#669900 width=100><FONT face="arial, helvetica">
					<A href= index.php?operacion=ordenar&campo=fecha alt="Ordenar por Fecha">
						Fecha</A></FONT></TH>
					<TH bgcolor=#669900 width=100><FONT face="arial, helvetica">
					<A href= index.php?operacion=ordenar&campo=importe alt="Ordenar por Importe">
						Importe (&euro;)</A></FONT></TH>
					<TH bgcolor=#669900 width=100 colspan="2"><FONT color=white face="arial, helvetica">
						Operaciones</FONT></TH>
			</TR>

			<?php
				//listar($mi_monedero,"");
				//echo $lista_conceptos
			 	$mi_monedero->listar();
			?>

			<TR>


			<form name="form2" method="post" action="index.php">
	    			  <input type="hidden" name="operacion" value="alta">
    				<TD><input type="text" name="concepto" size="35" maxlength="100"></TD>
	    			<TD align=center><input type="text" name="fecha" size="10" maxlength="10"></TD>
    				<TD align=right><input type="text" name="importe" size="8" maxlength="8"></TD> 
    				<TD colspan="2"><INPUT TYPE="SUBMIT" NAME="boton" VALUE="A&ntilde;adir registro"></TD>
    		</form>

    		</TR>
    </TABLE>

    <P>

    <FORM METHOD=POST ACTION=index.php>
		  <TABLE border=0 width=600>
			<TR><TD colspan=2><HR></TD></TR>
			<TR><TD valign=top align=right>
				<FONT size =-1 face=arial, helvetica>Buscar concepto</FONT></TD>
				<TD>
					<INPUT TYPE=TEXT NAME="buscar_texto" VALUE="" size="20"> 
					<INPUT TYPE=SUBMIT NAME=buscar  VALUE="¡Buscar!">
				    <input type="hidden" name="operacion" value="buscar">
				</TD>
			</TR><TR>
				<TD colspan=2><HR></TD>
			</TR>
		  </TABLE>
	</FORM>


		  <TABLE BORDER=0 cellspacing=1 cellpadding=1 align=center width=600>
		  <TR>
		  	 <TD><FONT size =-1 face=arial, helvetica>El nº de registros del monedero es <b><?php  echo $mi_monedero->obtenerNumRegistros();?></B></LEFT></FONT><P></TD>
		  	 <TD valign=top align=right><TABLE border=1 CELLSPACING=0 CELLPADDING=3 bgcolor=black>
			<TR><TD bgcolor=#669900>
				<FONT size =-1 face="arial, helvetica"><A href = "index.php">Ver listado inicial</A></FONT>
			</TD></TR></TABLE></TD>
		  </TR><TR>
		  	 <TD colspan=2><FONT size =-1 face=arial, helvetica color=red>El balance del monedero es de <b><?php echo $mi_monedero->obtenerBalance();?></B> &euro;</LEFT></FONT><P></TD>
		  </TR>
		  </TABLE><BR>NOTA: es obligatorio rellenar el campo Concepto.
</center></BODY>
</HTML>

