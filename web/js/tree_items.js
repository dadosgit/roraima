var Compras = '/compras_dev.php/';
var Tesoreria= '/tesoreria_dev.php/';
var Nomina='/nomina_dev.php/';
var Ingresos='/ingresos_dev.php/';
var Formulacion='/formulacion_dev.php/';
var Obra='/obras_dev.php/';
var Inv_coloc='/inv_coloc_dev.php/';
var Cred_cobr='/cred_cobr_dev.php/';
var Bienes = '/bienes_dev.php/';
var Hacienda = '/hacienda_dev.php/';
var Financiamiento = '/financiamiento_dev.php/';

/*var Compras = '/compras.php/';
var Tesoreria= '/tesoreria.php/';
var Nomina='/nomina.php/';
var Ingresos='/ingresos.php/';
var Formulacion='/formulacion.php/';
var Obra='/obras.php/';
var Inv_coloc='/inv_coloc.php/';
var Cred_cobr='/cred_cobr.php/';
var Bienes = '/bienes.php/';
var Hacienda = '/hacienda.php/';
var Financiamiento = '/financiamiento.php/';
*/



var ReportesCompras='http://'+window.location.host+'/vb-libre/reportes/compras/';
var ReportesTesoreria='http://'+window.location.host+'/vb-libre/reportes/tesoreria/';
var ReportesNomina='http://'+window.location.host+'/vb-libre/reportes/nomina/';
var ReportesFormulacion='http://'+window.location.host+'/vb-libre/reportes/formulaciondemo/';
var servidor='http://'+window.location.host;

var TREE_ITEMSCOM_ALM = [
	['SIGA', null,
		['Compras y Almac&eacute;n', null,
			['Proveedores', null,
				['Definici&oacute;n de Grupos de Recaudos', Compras+'almtiprecpro'],
				['Definici&oacute;n de Recaudos', Compras+'almregrec'],
				['Registro de Proveedores', Compras+'almregpro'],
				['Definici&oacute;n de Condiciones de Pago', Compras+'almconpag'],
				['Definici&oacute;n de Formas de Entrega', Compras+'almforent'],
				['Definici&oacute;n de Razones de Compra', Compras+'almrazcom'],
				['Definici&oacute;n de Rangos de Cotizaciones', Compras+'almdefcot'],
				['Definici&oacute;n de Motivos de Faltantes', Compras+'almmotfal'],
				['Definici&oacute;n de Tipo de Entrada', Compras+'almtipent'],
				['Definici&oacute;n de Tipo de Salida', Compras+'almtipsal'],				
			],
			['Art&iacute;culos', null,
				['Definici&oacute;n de Art&iacute;culos', Compras+'almdefart'],
				['Definici&oacute;n de Ubicaciones', Compras+'almdefubi'],
				['Ramos de Art&iacute;culos', Compras+'almramart'],
				['Registro de Art&iacute;culos y+o Servicios', Compras+'almregart'],
				['Registro de Recargos', Compras+'almregrgo'],
				['Asociaci&oacute;n de Retenciones a Servicios', Compras+'almretser'],
				['Registro de Productos Terminados', Compras+'faexiart'],
				['Proyectos', Compras+'almtippro'],
			],
			['Compras', null,
				['Ordenes de Compra y+o Servicio', Compras+'almordcom'],
				['Registro de Contratos', Compras+'almcontrato'],
				['Ajuste a Ordenes de Compra', Compras+'almajuoc'],
				['Cotizaciones', Compras+'almcotiza'],
				['Asignaci&oacute;n de Prioridad a Cotizaciones', Compras+'almpriori'],
			],
			['Almacen',null,
				['Definiciones Generales', Compras+'almdefalm'],
				['Requisiciones', Compras+'almreq'],
				['Recepci&oacute;n de Productos Terminados', Compras+'almordrecter'],
				['Requisiciones de Servicios', Compras+'almreqser'],
				['Requisiciones por Departamento (Solicitud de Egresos)', Compras+'almsolegr'],
				['Despachos', Compras+'almdesp'],
				['Prestacion de Servicios', Compras+'almdespser'],								
				['Inventario F&iacute;sico', Compras+'alminvfis'],
				['Traspaso de Art&iacute;culos', Compras+'almtraalm'],
				['Recepcion de Ordenes de Compras', Compras+'almordrec'],
				['Salida de Almacen', Compras+'almsalalm'],
			],    
			['Reportes',null,
				['Generales',null,
					['Cat�logo de Art�culos', ReportesCompras+'carcatart.php'],
					['Cat�logo de Ramos', ReportesCompras+'carramart.php'],
					['Cat�logo de Proveedores', ReportesCompras+'carprovee.php'],
					['Cat�logo de Unidades', ReportesCompras+'cardefalm.php'],
					['Cat�logo de Recaudos', ReportesCompras+'carrecaud.php'],
					['Cat�logo de Recargos', ReportesCompras+'carrecarg.php'],
					['Ficha del Proveedor', ReportesCompras+'carficpro.php'],
				],
				['Movimientos',null,
					['Requisiciones', ReportesCompras+'carreqart.php'],
					['Recepciones', ReportesCompras+'carrcpart.php'],
					['Despachos', ReportesCompras+'cardphart.php'],
					['Ordenes de Compra y/o Servicio', ReportesCompras+'cardetord.php'],
					['Recepciones y Diferencias', ReportesCompras+'carrcpord.php'],
					['Despachos y Diferencias', ReportesCompras+'carreqdph.php'],
					['Resumen de Movimientos', ReportesCompras+'carmovart.php'],
				],
				['Formas Preimpresas',null,
					['Etiquetas de Articulos', ReportesCompras+'caretique.php'],
					['Requisiciones', ReportesCompras+'carreqpre.php'],
					['Solicitud de Autorizaci�n de Egreso', ReportesCompras+'carsolegr.php'],
					['Recepciones', ReportesCompras+'carrcppre.php'],
					['Despachos', ReportesCompras+'cardphpre.php'],
					['Ordenes de Compra', ReportesCompras+'carordpre.php'],
					['Ordenes de Servicio', ReportesCompras+'carordser.php'],
					['Constancia de Inscripci�n Provisional De Proveedores', ReportesCompras+'carconinspro.php'],
				],
				['Almac�n',null,
					['Relaci�n Inventario Almac�n', ReportesCompras+'carrelinvalm.php'],
					['Hoja de Conteo F�sico', ReportesCompras+'carconfis.php'],
					['Inventario F�sico Valorado', ReportesCompras+'carinvfis.php'],
					['Stock M�ximo', ReportesCompras+'carstomax.php'],
					['Stock M�nimo', ReportesCompras+'carstomin.php'],
					['Punto de Reorden', ReportesCompras+'carptoreo.php'],
				],			
			],	                                                                                        
			['Mantenimiento', null,
				['Clasificador de Partidas Presupuestarias', Compras+'nommanclapre'],
				['Traspaso de Inventario Fisico a Logico', Compras+'almtrainv'],					
				['Importar Productos', Compras+'importarproducto'],					
				['Actualizar Precios y Existencias', Compras+'actualizarproducto'],					
			],
		],
	],
];

var TREE_ITEMS_TER = [
	['SIGA', null,
		['Tesorer&iacute;a', null,
			['Definiciones Espec&iacute;ficas', null,
				['Empresa', Tesoreria+'pagdefemp'],
				['Tipos de Cuentas Bancarias', Tesoreria+'tesdeftipcue'],
				['Tipos de Movimientos Bancarios', Tesoreria+'tesdeftipmov'],
				['Tipos de Rendimiento', Tesoreria+'tesdeftipren'],
				['Tipos de Monedas', Tesoreria+'tesdeftipmon'],
				['Tipos de Retenciones', Tesoreria+'pagtipret'],
				['Tipos de Financiamiento', Tesoreria+'pretipfin'],
				['Bancos', Tesoreria+'tesdefcueban'],
				['Tipos de Beneficiario', Tesoreria+'pagtipben'],				    
				['Beneficiarios', Tesoreria+'pagbenfic'],
				['Asociacion Conceptos+Tipos de Retenciones', Tesoreria+'pagretcon'],
				['Definici&oacute;n de Ubicaci&oacute;n', Tesoreria+'tesdesubi'],
				['Definici&oacute;n del Iva para Agentes de Retenci&oacute;n', Tesoreria+'pagretiva'],
				['Definici&oacute;n de Cuentas Contables para Rendici&oacute;n de Gastos', Tesoreria+'tesdefrengas'],
				['Definici&oacute;n de Reportes de Comprobantes de Retenci&oacute;n', Tesoreria+'pagrepret'],											
			],

			['Ordenamiento de Pago', null,
				['Ordenes de Pago', Tesoreria+'pagemiord'],
				['Fondos a Terceros', Tesoreria+'pagemiret'],
				['Enterar Retenci&oacute;n de ISLR', Tesoreria+'tesretislr'],
			],
			['Bancos', null,
				['Emision de Cheques', Tesoreria+'tesmovemiche'],
				['Movimientos seg&uacute;n Libros', Tesoreria+'tesmovseglib'],
				['Movimientos seg&uacute;n Libros A&ntilde;os Anteriores', Tesoreria+'tesmovseglib'],
				['Movimientos seg&uacute;n Bancos', Tesoreria+'tesmovsegbanant'],
				['Movimientos seg&uacute;n Bancos A&ntilde;os Anteriores', Tesoreria+'tesmovsegbanant'],
				['Transferencias Bancarias', Tesoreria+'tesmovtraban'],
				['Conciliaci&oacute;n', Tesoreria+'tesmovconban'],
				['Cierre de Per&iacute;odo', Tesoreria+'tesmovcieban'],
			],
			['Caja', null,
				['Cheques en Custodia', Tesoreria+'teschecus'],
			],
			['Reportes', null,
				['Generales',  null,
				 	['Tipos de Cuentas Bancarias', ReportesTesoreria+'tsrtipcue.php'],
					['Tipos de Movimientos Bancarios', ReportesTesoreria+'TSRTIPMOV.php'],
					['Tipos de Retenciones', ReportesTesoreria+'OPRTIPRET.php'],
					['Beneficiarios', ReportesTesoreria+'OPRBENEFI.php'],
				 ],
				['Ordenamiento de Pago', null,
				 	['Orden de Pago Preimpresa', ReportesTesoreria+'OPRORDPRE_NEW.php'],
					['Orden de Pago Preimpresa para N�mina', ReportesTesoreria+'OPRORDPRE_NOMINA.php'],
					['Orden de Pago Tipo Anulaci�n Preimpresa', ReportesTesoreria+'OPRORDPREANU.php'],
					['Ordenes de Pagos con Retenciones', ReportesTesoreria+'OPRORDRET.php'],
					['Consulta de Ordenes por Ticket', ReportesTesoreria+'OPRORDPAGSTATUS.php'],
					['Relaci�n Anexa', ReportesTesoreria+'OPRRELANEX.php'],
					['Relaci�n Anexa de Anulaci�n', ReportesTesoreria+'OPRRELANEX_ANU.php'],
					['Relaci�n Anexa Ordenes Permanentes', ReportesTesoreria+'TSRRELANEOPP.php'],
					['Relaci�n de Ordenes de Pago por C�digo Presupuestario',ReportesTesoreria+'OPRORDEMITIDASPARTIDAS.php'],
					['Listado de Ordenes de Pago', ReportesTesoreria+'OPRORDPAG.php'],
					['Listado de Ordenes de Pago Efectivas', ReportesTesoreria+'OPRORDPAGEFEC.php'],
					['Listado de Ordenes de Pago Efectivas por Beneficiario y status', ReportesTesoreria+'OPRORDPAGBEN_STA.php'],
					['Listado de Ordenes de Pago Efectivas (por Status con fecha de env�o)', ReportesTesoreria+'OPRORDPAGEFEC_STA_FEC.php'],
					['Listado de Ordenes de Pago Anuladas', ReportesTesoreria+'OPRORDPAGANU.php'],
					['Listado de Ordenes de Pago Detallada', ReportesTesoreria+'OPRDETORD.php'],
					['Listado de Ordenes de Pago de Tipo Anulaci�n', ReportesTesoreria+'OPRDETORDANU.php'],
					['Listado de Ordenes de Pago Anulada y Tipo Anulaci�n', ReportesTesoreria+'OPRDETORD_ANULACION_DEFINITIVA.php'],
					['Listado de Ordenes de Pago Enviadas a Contralor�a', ReportesTesoreria+'OPRORDENVCONT.php'],
					['Hist�rico de Ordenes de Pago Enviadas a Finanzas', ReportesTesoreria+'OPRORDENVFIN_SINTMP.php'],
					['�ltimo listado de Envio a Finanzas', ReportesTesoreria+'OPRORDENVFIN.php'],
					['Hist�rico de Ordenes de Pago Enviadas al Despacho', ReportesTesoreria+'OPRORDENVDES_SINTMP.php'],
					['�ltimo listado de Envio al Despacho', ReportesTesoreria+'OPRORDPAGDES_VIS.php'],
					['Autorizaci�n de Pago FIDES', ReportesTesoreria+'OPRAUTPAG.php'],
					['Autorizaci�n de Pago FIDES (Retenci�n)', ReportesTesoreria+'OPRAUTPAG_RETENC.php'],
					['Oficio Autorizaci�n de Pago FIDES', ReportesTesoreria+'OPROFIAUTPAG.php'],
					['Retenciones Pagadas y Pendientes por Pagar', ReportesTesoreria+'TSFONTER.php'],
				 ],
				 ['Bancos', null,
				  	['Bancos', ReportesTesoreria+'TSRDEFBAN.php'],
					['Disponibilidad Bancaria', ReportesTesoreria+'TSRDISBAN.php'],
					['Relaci�n de Cuentas Bancarias', ReportesTesoreria+'TSRRELBAN.php'],
					['Movimientos seg�n Libros por Banco', ReportesTesoreria+'TSRMOVLIBBAN.php'],
					['Movimientos seg�n Libros por Banco(Cheques Anulados)', ReportesTesoreria+'TSRMOVLIBBANCHQ.php'],
					['Movimientos seg�n Bancos', ReportesTesoreria+'TSRMOVBAN.php'],
					['Movimientos seg�n Bancos por Banco', ReportesTesoreria+'TSRMOVBANBAN.php'],
					['Detalle de Conciliaci�n', ReportesTesoreria+'TSRRESCON.php'],
					['Conciliaci�n Bancaria', ReportesTesoreria+'TSRCONCIL.php'],
					['Transferencias Bancarias', ReportesTesoreria+'TSRTRABAN.php'],
					['Oficio para Autorizaci�n a Transferencias Bancarias (R)', ReportesTesoreria+'OPRtransferencia.php'],
					['Oficio para Abono a Ordenes de Pago Permanentes (R)', ReportesTesoreria+'OPRABOORDPAGPER.php'],
					['Saldo de Cuentas Bancarias', ReportesTesoreria+'TSRSALCTABAN.php'],
				  ],
				  ['Caja', null,
					['Relaci�n de Ordenes de Pago Entregadas', ReportesTesoreria+'TSRCHEENT.php'],
					['Ordenes de Pago por Cr�dito', ReportesTesoreria+'OPRORDPAGEFEC_CRED.php'],
					['Movimiento de Pagado por Cuenta y Fechas', ReportesTesoreria+'TSRRELORDPAG.php'],
					['Listado para solicitar pago I.S.L.R', ReportesTesoreria+'TSRISLR.php'],
				 ],
				 ['Control de Ordenes de Pago de Tesoreria', null,
					['Relaci�n de Ordenes de Pago en Caja por Categor�a Program�tica', ReportesTesoreria+'TSRRELORDCAJ_CAT.php'],
					['Relaci�n de Ordenes de Pago en Caja por Cat Prog con Direcci�n Beneficiario', ReportesTesoreria+'TSRRELORDCAJ_CAT_DIR.php'],
					['Relaci�n de Ordenes de Pago en Caja por Cat Prog con Dir. Beneficiarios jur�dicos', ReportesTesoreria+'TSRRELORDCAJ_CAT_DIR_JUR.php'],
					['Res�men  de Ordenes de Pago Pendientes por Abono', ReportesTesoreria+'TSRRESORDPAGPENABO.php'],
					['Relaci�n de Ordenes de Pago Pendientes por Abono Detallada', ReportesTesoreria+'TSRORDPAGPENABO.php'],
					['Res�men de Ordenes de Pago Permanentes (TODAS)', ReportesTesoreria+'TSRRESORDPAGPER.php'],
					['Relaci�n  de Ordenes de Pago Permanentes Detallada (TODAS)', ReportesTesoreria+'TSRORDPAGPER.php'],
					['Ordenes de Pago Canceladas por Beneficiario', ReportesTesoreria+'OPROPCANBEN.php'],
					['Ordenes de Pago en Custodia por Beneficiario', ReportesTesoreria+'OPROPCUSBEN.php'],
					['Ordenes de Pago Canceladas por Sector', ReportesTesoreria+'OPROPCANSEC.php'],
					['Ordenes de Pago en Custodia por Sector', ReportesTesoreria+'OPROPCUSSEC.php'],
					['Ordenes de Pago Canceladas por Contratos entre Fechas', ReportesTesoreria+'OPROPCONCANFEC.php'],
					['Ordenes de Pago en Custodia por Contratos entre Fechas', ReportesTesoreria+'OPROPCONCUSFEC.php'],
					['Ordenes de Pago Permanentes Canceladas', ReportesTesoreria+'TSROPPFECPAG.php'],
				],
				['Fondos en Avance', null,
				 	['Ficha Beneficiario', ReportesTesoreria+'TSRBENFONAVA.php'],
					['Relaci�n de Apartados', ReportesTesoreria+'TSRAPAFONAVA.php'],
					['Cheque Preimpreso', ReportesTesoreria+'tsrvoucher1.php'],
				],
				['Impuestos', null,
				 	['Comprobante de retenci�n IVA', ReportesTesoreria+'OPRCOMPRET_IVA.php'],
					['Comprobante de retenci�n ISLR', ReportesTesoreria+'OPRCOMPRET_ISLR.php'],
					['Comprobante de retenci�n LTF', ReportesTesoreria+'OPRCOMPRET_LTF.php'],
					['Libro de Compras', ReportesTesoreria+'TSRLIBCOM.php'],
					['Listado de Retenciones Enteradas', ReportesTesoreria+'OPRRELRETENT.php'],
					['Listado de Ordenes de Pago Enteradas', ReportesTesoreria+'OPRORDPAGENT.php'],				
				],			
			],
			['Mantenimiento', null,
				['Eliminar Movimiento seg&uacute;n Libros Anulados', 'mantenimiento+man_01.htm'],
				['Actualizar Monto de Retenciones por Orden', Tesoreria+'pagmodret'],
			],
		],
	]
];

var TREE_ITEMS_NOM = [
	['SIGA', null,
		['Nomina y Personal', null,
			['Definiciones espec&iacute;ficas', null,
				['Institucion', Nomina+'nomdefespgen'],
				['Tipos Nominas', Nomina+'nomdefesptipnom'],
				['Conceptos', Nomina+'nomdefespcon'],
				['Niveles Organizacionales', Nomina+'nomdefespnivorg'],
				['Cargos', Nomina+'nomdefespcar'],
				['Definicion de Conceptos Variables', Nomina+'nomdefespmovper'],
				['Variables', Nomina+'nomdefespvar'],
				['Bancos', Nomina+'nomdefespban'],
				['Profesiones', Nomina+'nomdefespprofes'],
				['Perfiles', Nomina+'nomdefespperfil'],
				['Tipos de Parientes', Nomina+'nomdefesppar'],
				['Guarderias', Nomina+'nomdefespguarde'],
				['Tipos de Gastos', Nomina+'nomdeftipgas'],
				['Motivos de Faltas y/o Permisos', Nomina+'nomdefespmotfalpre'],
				['Definicion de Condicion Contractual', Nomina+'nomdefespgrulab'],
				['Conceptos para Reportes', Nomina+'nomdefespconsue'],
				['Conceptos para el Salario Integral', Nomina+'nomconceptossalariointegral'],
				['Conceptos para el Sueldo', Nomina+'nomconceptossueldo'],
				['Conceptos para las Primas', Nomina+'nomconceptosprimas'],
				['Conceptos de Compensacion por Nomina', Nomina+'nomconceptoscompensacion'],
				['Conceptos de Ahorro Habitacional', Nomina+'nomdefconaho'],
				['Conceptos para el Fondo de Jubilacion y Pensiones', Nomina+'nomdefconfon'],
				['Definicion de Jornadas Laborales', Nomina+'nomjorlablot'],
				['Jornadas Laborales por Empleado', Nomina+'nomjorlabind'],
				['Definicion de Concepto de Cesta Tickets', Nomina+'nomdefespcestic'],
				['Tipos de Retiros', Nomina+'nomdeftipret'],
				['Definicion de Conceptos para Dias Adicionales', Nomina+'nomdefdiaadicnom'],
				['Conceptos para el ISLR', Nomina+'nomdefespislr'],
				['Definicion de Retenciones y Aportes', null,
					['Retenciones y Aportes', Nomina+'nomdefaportes'],
					['Conceptos para Aportes', Nomina+'nomdefconaportes'],
					['Conceptos para Retenciones', Nomina+'nomdefconretencion'],
				],
				['Division Territorial', null,
					['Estados', Nomina+'nomdefesppai'],
				],	
			],
			['Personal', null,
				['Datos Personales', Nomina+'nomhojint'],
				['Tipo de Cargos', Nomina+'nomtipcar'],
				['Tipo de Dedicacion', Nomina+'nomtipded'],
				['Tabla de Sueldos por Grado y Paso', Nomina+'nomcomocp'],
				['Asignacion de Cargos y Conceptos a Empleados', Nomina+'nomasicarconnom'],
				['Asignacion de Cargos a Empleados en lote', Nomina+'nomasicaremplot'],
				['Cambio de Cargos a Empleados', Nomina+'cambiodecargos'],
			],
			['Archivo de elegibles',Nomina+'nomhojint'],
			['Faltas y/o Permisos', null,
				['Permisos', Nomina+'nomfalperper'],
				['Salidas', Nomina+'nomfalpersal'],
				['Llegadas', Nomina+'nomfalperlle'],
				['Registro de Dias Extras', Nomina+'nomdiaext'],
				['Registro de Faltas y/o Permisos Por Nomina en Lote', Nomina+'nomfalperlot'],
				['Registro de Dias Extras Por Nomina en Lote', Nomina+'nomdiaextlablot'],
			],
			['Vacaciones', null,
				['Parametros para el Registro y Control de Vacaciones', Nomina+'vacdefgen'],
				['Definicion de Bono Vacacional y Jornada Laboral', Nomina+'vacdiasbonovac'],
				['Tabla para los Dias de Disfrute', Nomina+'vacdiadis'],
				['Tabla para los Dias Feriados', Nomina+'vacdiafer'],
				['Registro de Vacaciones Disfrutadas', Nomina+'vachistorico'],
				['Registro de Vacaciones Disfrutadas en Lote', Nomina+'vachistorico_lote'],
				['Registro de Solicitud de Vacaciones', Nomina+'vacsalidas'],
				['Registro y Control de Vacaciones', Nomina+'vacregsalVac'],
				['Liquidacion de Vacaciones Por Egreso', Nomina+'vacliquidacion'],
			],
			['Prestaciones', null,
				['Definicion de Parametros para las Prestaciones Sociales',null,
				     ['Tipos de Contratos Colectivos', Nomina+'presnomtipcon'],
				     ['Registro de Tipos de Asignaciones', Nomina+'presnomasiconpre'],
				     ['Definicion Presupuestaria de Liquidacion', Nomina+'presnomdefpre'],
				],
				['Registros Utiles para el Calculo de Prestaciones Sociales',null,
				     ['Asignacion de Trabajadores para Prestaciones  Por Contrato Colectivo', Nomina+'presnomasitrabcont'],
				     ['Registro de Tasas de Interes Periodicas', Nomina+'presnomintfecref'],
				     ['Registro de Salario Integral por Contrato', Nomina+'presnomregsalint'],
				     ['Registro de Salario Integral por Contrato Individual', Nomina+'presnomregsalintind'],
				],
				['Registro Historico de Anticipos Otorgados', Nomina+'presnomreghisantpre'],
				['Solicitud de Anticipo Sobre Prestaciones', Nomina+'presnomantpre'],
				['Calculo de Prestaciones Sociales', Nomina+'presnomcalintpre'],
				['Liquidacion Final de Prestaciones', Nomina+'presnomliquidacion'],
				['Importar Datos Prestaciones Sociales', Nomina+'importarprestaciones'],
			],
			['Asignaciones Generales para el Calculo de Nomina', null,
				['Asignacion de Conceptos por Categoria Presupuestaria Especiales', Nomina+'asignarconceptoscategorias'],
				['Asignacion de Conceptos a Nomina', Nomina+'asignarconceptosnomina'],
				['Asignacion de Cargos a Nomina', Nomina+'nomdefespasicartipnomlot'],
				['Asignacion de Conceptos a Empleados', Nomina+'nomnomasiconnom'],
				['Asignacion de Cuentas Bancarias por Empleado', Nomina+'empleadosbanco'],
				['Activar/Desactivar Conceptos', Nomina+'activarconceptos'],
				['Asignacion de Categorias por Empleados', Nomina+'asignarcategoriasconceptosxempleado'],
				['Asignacion de Modalidad de Pago de Cesta Ticket a Empleados por Nomina', Nomina+'modalidadcestaticketempleados'],
			],
			['Movimientos de Nomina', null,
				['Movimientos Por Concepto', Nomina+'nomnommovnomcon'],
				['Movimientos Por Concepto y Cargos', Nomina+'nomnommovnomconcar'],
				['Movimientos Por Empleado', Nomina+'nomnommovnomemp'],
				['Modificar Monto/cantidad a Conceptos Segun Formula', Nomina+'modificarmontoconcepto'],
			],
			['Nominas Especiales', null,
				['Definicion', Nomina+'nomespdefinicion'],
				['Conceptos', Nomina+'nomespconceptos'],
				['Calculo', Nomina+'nomespcalculo'],
			],
			['Calculos de Nomina', null,
				['Calculo de Nomina', Nomina+'nomnomcalnom'],
				['Calculo de Nomina por Empleados', Nomina+'nomnomcalnomind'],
				['Cierre de Nomina', Nomina+'nomnomcienom'],
			],
			['Prestamos', null,
				['Tipos de Prestamos', Nomina+'nomdefesptippre'],
				['Prestamos', Nomina+'nomperprestamos'],
				['Movimientos de Prestamos', Nomina+'nomperhispre'],
			],
			['Reportes',null,
				['Definiciones Especificas', null,
					['Tipos Nomina', ReportesNomina+'nprnomina.php'],
					['Conceptos', ReportesNomina+'nprdefcpt.php'],
					['Conceptos por Nomina', ReportesNomina+'nprconnom.php'],
					['Niveles Organizacionales', ReportesNomina+'nprnivorg.php'],
					['Cargos', ReportesNomina+'nprcargos.php'],
					['Bancos', ReportesNomina+'nprbancos.php'],
					['Categorias Presupuestarias', ReportesNomina+'nprcatpre.php'],
					['Municipios', ReportesNomina+'nprmunicipios.php'],
				],
				['Personal', null,
					['Datos Personales', ReportesNomina+'nprhojint.php'],
					['Asignaci&oacute;n de Cargos', ReportesNomina+'nprasicaremp.php'],
					['Ingresos y Egresos del Personal por Per&iacute;odos', ReportesNomina+'npringegr.php'],
				],
				['Prestaciones', null,
					['Antiguedad Prestaciones Sociales Nuevo Regimen', ReportesNomina+'npcalpresoc_rn.php'],
					['Antiguedad Prestaciones Sociales Antiguo Regimen', ReportesNomina+'npcalpresoc_rv.php'],
					['Anticipos sobre Prestaciones Sociales', ReportesNomina+'nprcalantpresoc.php'],
					['Compensaci&oacute;n Bono Transferencia', ReportesNomina+'nprbonotransf.php'],
					['Intereses sobre Prestaciones Sociales Nuevo Regimen', ReportesNomina+'nprintpresoc_rn.php'],
					['Liquidaci&oacute;n de Cuentas', ReportesNomina+'nprprestliquidacion.php'],
				],
				['Vacaciones', null,
					['Solicitud de Vacaciones', ReportesNomina+'npvac_solicitud.php'],
					['Historico de Vacaciones disfrutadas por Empleado', ReportesNomina+'npvac_historico.php'],
					['Relaci&oacute;n de Vacaciones disfrutadas por Empleado en lote', ReportesNomina+'npvac_relacionhistoricos.php'],
					['Relaci&oacute;n de Vacaciones Procesadas', ReportesNomina+'npvac_relacionsalidas.php'],
				],
				['Listados de Nomina', null,
					['Listados de N&oacute;mina Definitiva por Categoria', ReportesNomina+'nprnomdefcat.php'],
					['Listados de N&oacute;mina Definitiva por Nivel', ReportesNomina+'nprnomdefniv.php'],
					['Listado de N&oacute;mina para la firma por Categor&iacute;a', ReportesNomina+'nprnomfircat.php'],
					['Consolidado de N�mina', ReportesNomina+'nprconsolidado.php'],
				],
				['Recibos de Pago', null,
					['Recibos de Pago', ReportesNomina+'nprrecpag.php'],
				],
				['Listado de Conceptos', null,
					['Listados por Conceptos *', ReportesNomina+'nprlistconc.php'],
					['Relaci&oacute;n Categoria - Conceptos', ReportesNomina+'nprconniv.php'],
				],
				['Relaciones Presupuestarias', null,
					['Relaci&oacute;n N&oacute;mina/Presupuesto', ReportesNomina+'nprnompre.php'],
					['Disponibilidad Presupuestaria por N&oacute;mina', ReportesNomina+'disponibilidadpresupnomina.php'],
				],
				['Relaciones de Pago', null,
					['Relaci&oacute;n Cuentas Bancarias/ N&oacute;mina', ReportesNomina+'nprrelbanc.php'],
				],
				['Diskettes', null,
					['Relaci&oacute;n Deposito/Banco', ReportesNomina+'nprrelbancdisc.php'],
				],
				['Historicos', null,
					['Historico Listado por Conceptos', ReportesNomina+'nprhistlistconc.php'],
				],
			],
			['Mantenimiento', null,
				['Importar Asignaci&oacute;n de Cargos', Nomina+'importarasignarcargos'],
				['Importar Hoja Integral', Nomina+'importarhojaintegral'],
				['Importar Valores de Conceptos', Nomina+'importarvaloresconceptos'],
				['Clasificador de Partidas Presupuestarias', Nomina+'nommanclapre'],
			],
		],
	],
];

var TREE_ITEMSCOM_FOR = [
	['SIGA', null,
		['Formulaci&oacute;n de Presupuesto', null,
			['Definiciones Generales', null,
				['Areas Estrategicas', null,
					['Equilibrios', Formulacion+'fordefequ'],
					['Sub Objetivos', Formulacion+'fordefsubobj'],
					['Sub Sub Objetivos', Formulacion+'fordefsubsubobj'],
					['Unidades de Medidas', Formulacion+'fordefunimed'],
					['Definiciones de Estatus', Formulacion+'fordefstatus'],
					['Organismos P&uacute;blicos', Formulacion+'fordeforgpub'],
				],
			],
			['Ingresos', null,
				['Clasificador Presupuestario (Recursos)', Formulacion+'pretiting'],
				['Formulaci&oacute;n', null,
					['Formulaci&oacute;n Presupuesto de Ingresos Directa', Formulacion+'fortitingivss'],
				],				
			],
			
			['Egreso', null,
				['Definiciones Especificas', null,
					['Registro de Directrices', Formulacion+'fordefdirectriz'],
					['Proyectos y Acciones Centralizadas IVSS', Formulacion+'fordefproyectoivss'],
					['Acciones Espec&iacute;ficas IVSS', Formulacion+'fordefaccespivss'],
					['Acciones POA IVSS', Formulacion+'fordefaccpoaivss'],
					['Asociaci&oacute;n de Acciones POA a Acciones Especificas - Proyectos', Formulacion+'fordefpryaccsubaccivss'],
					['Actividades por Sub Acciones - Acciones Especificas - Proyectos IVSS', Formulacion+'fordefpryaccactivss'],
					['Unidades Ejecutoras IVSS', Formulacion+'fordefcatpreivss'],
				],
				['Formulaci&oacute;n', null,
					['Seguimientos Metas Formuladas en el POA', Formulacion+'forsegpoaivss'],
				],
			],
			['Reportes',null,
				['Generales',null,
					['Identificacion del Ente', ReportesFormulacion+'forrideent.php'],
					['Marco Macro-Econ&oacute;mico', ReportesFormulacion+'forrpretarmed.php'],
					['Precios y/o Tarifas Medias', ReportesFormulacion+'forrideent.php'],
					['Recursos Humanos del Ente Clasificados por Tipo de Cargos', ReportesFormulacion+'forrrhclatipcar.php'],
					['Clasificaci&oacute;n del Personal del Ente por Escala de Sueldos', ReportesFormulacion+'forrclaperescsue.php'],
					['Escala del Personal Pensionado', ReportesFormulacion+'forrescperpen.php'],
					['Escala del Personal Jubilado', ReportesFormulacion+'forrescperjub.php'],
					['Proyectos y Acciones Centralizadas de los Entes', ReportesFormulacion+'proyaccentes.php'],
					['Presupuesto de Gastos por Subespecifica', ReportesFormulacion+'presubesp.php'],
				],	
			],	                                                                                        
		],
	],
];

var TREE_ITEMS_ING = [
	['SIGA', null,
		['Ingresos', null,
			['Definiciones', null,
				['Definiciones Especificas', null,
					['Niveles', Ingresos+'ingnivpre'],
					['Titulos', Ingresos+'ingtitpre'],
					['Asignaci&oacute;n Inicial', Ingresos+'ingasiini'],
					['Contribuyentes', Ingresos+'ingdatcon'],
					['Tipos de Ingresos', Ingresos+'ingdeftiping'],				
				],
				['Registro de Ingresos', Ingresos+'ingreging'],
				['Ejecuci&oacute;n Global', Ingresos+'ingejeglo'],
				['Reclasificaci&oacute;n de Ingresos', Ingresos+'ingreclaing'],
				['Ajuste de Ingresos', Ingresos+'ingajustenew'],
				['Traslados', Ingresos+'ingtrasla'],
				['Adiciones Disminuciones', Ingresos+'ingadidis'],
			],				
		],
	],
];


var TREE_ITEMSCOM_OBR = [
	['SIGA', null,
		['Obras y Contrato', null,
			['Definiciones Generales', null,
				['Registro de Informaci&oacute;n del Sistema', null,
					['Recaudos', Obra+'oycdefrec'],
					['Retenciones', Obra+'oycdefret'],
					['Tipos de Actas', Obra+'oycdeftipact'],
					['Unidades', Obra+'oycdefuni'],
						['Divisi&oacute;nTerritorial', null,
							['Pais', Obra+'oycdefdivpai'],
							['Estado', Obra+'oycdefdivest'],
							['Ciudad', Obra+'oycdefdivciu'],
							['Municipio', Obra+'oycdefdivmun'],
							['Parroquia', Obra+'oycdefdivpar'],
							['Sector', Obra+'oycdefdivsec'],
						],
				],
			],
			['Contratista y Otras Organizaciones', null,
				['Definiciones Especificas', null,
					['Tipos de Organismos', Obra+'oycdeftiporg'],
					['Cargos', Obra+'oycdefcar'],
					['Profesiones', Obra+'oycdefpro'],
					['Empleados', Obra+'oycdefper'],
					['Equipos', Obra+'oycdefequ'],
					['Especialidades', Obra+'oycdefesp'],					
				],
				['Definiciones de Contratistas', Obra+'oycregpro'],				
				['Definiciones de Organismos',  Obra+'oycdeforg'],								
			],			
			['Solicitud', null,
				['Definiciones Especificas', null,
					['Tipos de Solicitudes', Obra+'oycdeftipsol'],
					['Tipos de Solicitantes', Obra+'oycdeftipste'],
				],
				['Atenci&oacute;n', null,
					['Datos del Solicitante', Obra+'oycdatsol'],
					['Registrar Solicitud', Obra+'oycregsol'],
					['Responder', Obra+'oycressol'],					
				],				
			],		
			['Obras', null,
				['Definiciones Especificas', null,
					['Partidas', Obra+'oycdefpar'],
					['Tipos de Obras', Obra+'oycdeftipobr'],
					['Tipos de Valuaci&oacute;n', Obra+'oycdeftipval'],					
				],
				['Detalles de Obras', null,
					['Formulaci&oacute;n de Presupuesto', Obra+'oycforotrcrepre'],
					['Registro de Obras', Obra+'oycdesobr'],					
					['Situaci�n de Obras', Obra+'oycsitobr'],													
				],	
					['Contratos', null,
						['Definiciones Especificas', null,
							['Tipos de Profesionales', Obra+'oycdeftippro'],
							['Tarifas por Tipo de Profesionales', Obra+'oyctartip'],
						],
						['Registro de Contratos', Obra+'oycdescon'],				
						['Registro de Actas',  Obra+'oycregact'],		
						['Registro de Valuaciones', Obra+'oycval'],				
						['Registro de Inspecciones',  Obra+'oycinscon'],								
						['Situaci&oacute;n del Contrato',  Obra+'oycsitcon'],														
					],	
			],					
		],
	],
];

var TREE_ITEMSCOM_BIE = [
	['SIGA', null,
		['Bienes Nacionales', null,
			['Definiciones',null,
				['Definici&oacute;n de Empresa', Bienes+'biedefemp'],
				['Definici&oacute;n de Ubicaci&oacute;n', Bienes+'biedefubi'],
				['Definici&oacute;n de Proveedores', Compras+'almregpro'],
				['Definici&oacute;n de Catalogo de Activos', Bienes+'biecatact'],
				['Definici&oacute;n de Disposici&oacute;n', Bienes+'biedefdis'],
				['Definici&oacute;n de Motivos de Disposici&oacute;n', Bienes+'biedefmotdis'],
				['Definici&oacute;n de Partidas', Bienes+'biedefpar'],
				['Definici&oacute;n de Clasificaci&oacute;n Funcional', Bienes+'biedefclafun'],
				['Definici&oacute;n de Cobertura Para Seguros', Bienes+'biecobseg'],
			],
			['Registro de Activos',null,
				['Registro Muebles', Bienes+'bieregactmued'],
				['Registro Inmuebles', Bienes+'bieregactinmd'],
				['Registro Semovientes', Bienes+'bieregactsemd'],
			],
			['Disposici&oacute;n de Activos',null,
				['Disposici&oacute;n de Muebles', Bienes+'biedisactmuenew'],
				['Disposici&oacute;n de Inmuebles', Bienes+'biedisactinm'],
				['Disposici&oacute;n de Semoviente', Bienes+'biedisactsem'],
			],
			['Registro de Seguros',null,
				['Seguros de Muebles', Bienes+'bieregsegmue'],
				['Seguros de Inmuebles', Bienes+'bieregseginm'],
				['Seguros de Semovientes', Bienes+'bieregsegsem'],
			],
			['Contabilidad de Activos',null,
				['Tabla de IPC', Bienes+'bieipcact'],
				['Definici&oacute;n Contable',null,
					['Definici&oacute;n Contable de Muebles', Bienes+'biedefconm'],
					['Definici&oacute;n Contable de Muebles por Lotes', Bienes+'biedefconlotm'],
					['Definici&oacute;n Contable de Inmuebles', Bienes+'biedefconi'],
					['Definici&oacute;n Contable de Inmuebles por Lotes', Bienes+'biedefconloti'],
					['Definici&oacute;n Contable de Semovientes', Bienes+'biedefcons'],
					['Definici&oacute;n Contable de Semovientes por Lotes', Bienes+'biedefconlots'],
				],
				['Revalorizacion', Bienes+'bieajuinf'],
			],
			['Mantenimiento',null,
				['Cierre de Mes', Bienes+'bieciemesdan'],
			],
		],
	 ],
];


var TREE_ITEMSCOM_HAC = [
	['SIGA', null,
		['Hacienda Municipal', null,
			['Definiciones Espec&iacute;ficas',null,
				['Definiciones de la Alcald&iacute;a', Hacienda+'facdefespins'],
				['Cat&aacute;logo de Fuentes de Ingresos', Hacienda+'facfueing'],
				['Cat&aacute;logo de Presupuesto de Ingresos', Hacienda+'fctiting'],
				['Definici&oacute;n de Recaudos', Compras+'almregrec'],
				['Definici&oacute;n de Tasas de Inter&eacute;s Bancarios', Hacienda+'facdefesptasban'],
				['Definiciones para las Fuentes de Ingreso',null,
					['Actividades Economicas',null,
						['Rango en Bs. para el pago de Impuestos', Hacienda+'facranpagimp'],
						['Actividades Comerciales', Hacienda+'facdefactcom'],
					],
					['Inmuebles',null,
						['Uso de Inmuebles', Hacienda+'facusoinm'],
						['Caracteristicas de Inmuebles', Hacienda+'faccarinm'],
						['Situaciones Juridicas de Inmuebles', Hacienda+'facsitjurinm'],
						['Catastro',null,
							['Codigo Catastral Fiscal', Hacienda+'faccodcatfis'],
							['Catastro con Fines Fiscales', Hacienda+'faccatfinfis'],
							['Cuadro para Calculo del Impuesto', Hacienda+'facranpaginm'],
						],
					],
				],
				['Tipos de Pagos', Hacienda+'facdefesptippag'],
				['Tipos de Solvencias', Hacienda+'facdefsol'],
				['Rutas', Hacienda+'facdefrut'],
				['Definiciones de la Alcald&iacute;a', Hacienda+'facdefespins'],
			],
			['Atenci&oacute;n al Contribuyente',null,
				['Registro de Cajeros', Hacienda+'fcajero'],
				['Registro de Contribuyente', Hacienda+'facdatcon'],
				['Licencia de Actividades Economicas',null,
					['Solicitud', Hacienda+'facpicsollic'],
					['Otorgamiento', Hacienda+'Facpiclic'],
				],
				['Inmuebles Urbanos', Hacienda+'facinmreg'],
				['Estado de Cuenta Integral', Hacienda+'facestcueint'],
				['Estado de Cuenta por Referencia', Hacienda+'facestcueintref'],
				['Solvencias', Hacienda+'facsolvencia'],
				['Reparos Fiscales', Hacienda+'facrepfisliq'],
			],
			['Declaraci&oacute;n/Liquidaci&oacute;n',null,
				['Actividades Econ&oacute;micas', Hacienda+'facpicliq'],
				['Inmuebles Urbanos', Hacienda+'facinmdec'],
				['Otros Ingresos', Hacienda+'facotringreg'],
			],
			['Recaudaci&oacute;n',null,
				['Convenios de Pago', Hacienda+'facconvenio'],
				['Pagos', Hacienda+'facrecpag'],
				['Abonos', Hacienda+'facabonos'],
				['Deudas', Hacienda+'facrecdeu'],
				['Actualizacion de Deudas', Hacienda+'facactdeuret'],
				['Generar Comprobante Contable', Hacienda+'facingresos'],
			],
		],
	 ],
];

var TREE_ITEMSCOM_FINAN = [
	['SIGA', null,
		['Financiamiento', null,
			['Definiciones Espec&iacute;ficas',null,
				['Definici�n de Recursos Supervisor/T�cnico', Financiamiento+'fnrecurs'],
			],
		],
	 ],
];




var TREE_ITEMS_MAIN = [
	['SIGA', null,
		['Contabilidad Presupuestaria', servidor+'/sistemafull/aplicaciones/presupuesto/index.php'],
		['Contabilidad Financiera', servidor+'/sistemafull/aplicaciones/contabilidad/index.php'],
		['Compras Y Almacen', 'principal/menu/m/compras'],
		['Ingresos', 'principal/menu/m/ingresos'],
		['Tesorer&iacute;a', 'principal/menu/m/tesoreria'],
		['Nomina', 'principal/menu/m/nomina'],
		['Bienes Nacionales', 'principal/menu/m/bienes'],
		['Formulaci&oacute;n', 'principal/menu/m/formulacion'],
		['Obras y Contratos', 'principal/menu/m/obra'],
		['Inversi&oacute;n y Colocaci&oacute;n', 'principal/menu/m/inv_coloc'],
		['Cr&eacute;dito y Cobranza', 'principal/menu/m/cred_cobr'],
		['Hacienda Municipal', 'principal/menu/m/hacienda'],		
		['Financiamiento', 'principal/menu/m/financiamiento'],			
      ]
	];

