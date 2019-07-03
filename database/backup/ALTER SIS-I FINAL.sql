
/*ALTER SEQUENCE START*/

ALTER TABLE ONLY public.evento_ui
ALTER COLUMN id
SET
DEFAULT nextval
('public.evento_ui_id_seq'::regclass);

ALTER TABLE ONLY public.contexto
ALTER COLUMN id
SET
DEFAULT nextval
('public.contexto_id_seq'::regclass);

ALTER TABLE ONLY public.criterio_metodologico
ALTER COLUMN id
SET
DEFAULT nextval
('public.criterio_metodologico_id_seq'::regclass);

ALTER TABLE ONLY public.criterio_metodologico_ui
ALTER COLUMN id
SET
DEFAULT nextval
('public.criterio_metodologico_ui_id_seq'::regclass);

ALTER TABLE ONLY public.diseno
ALTER COLUMN id
SET
DEFAULT nextval
('public.diseno_id_seq'::regclass);

ALTER TABLE ONLY public.evento
ALTER COLUMN id
SET
DEFAULT nextval
('public.evento_id_seq'::regclass);

ALTER TABLE ONLY public.foco
ALTER COLUMN id
SET
DEFAULT nextval
('public.foco_id_seq'::regclass);

ALTER TABLE ONLY public.fuente
ALTER COLUMN id
SET
DEFAULT nextval
('public.fuente_id_seq'::regclass);

ALTER TABLE ONLY public.indicio
ALTER COLUMN id
SET
DEFAULT nextval
('public.indicio_id_seq'::regclass);

ALTER TABLE ONLY public.institucion
ALTER COLUMN id
SET
DEFAULT nextval
('public.institucion_id_seq'::regclass);

ALTER TABLE ONLY public.instrumento
ALTER COLUMN id
SET
DEFAULT nextval
('public.instrumento_id_seq'::regclass);

ALTER TABLE ONLY public.investigacion
ALTER COLUMN id
SET
DEFAULT nextval
('public.investigacion_id_seq'::regclass);

ALTER TABLE ONLY public.item
ALTER COLUMN id
SET
DEFAULT nextval
('public.item_id_seq'::regclass);

ALTER TABLE ONLY public.migrations
ALTER COLUMN id
SET
DEFAULT nextval
('public.migrations_id_seq'::regclass);

ALTER TABLE ONLY public.objetivo_general
ALTER COLUMN id
SET
DEFAULT nextval
('public.objetivo_general_id_seq'::regclass);

ALTER TABLE ONLY public.objetivo_especifico
ALTER COLUMN id
SET
DEFAULT nextval
('public.objetivo_especifico_id_seq'::regclass);

ALTER TABLE ONLY public.parametro
ALTER COLUMN id
SET
DEFAULT nextval
('public.parametro_id_seq'::regclass);

ALTER TABLE ONLY public.pregunta
ALTER COLUMN id
SET
DEFAULT nextval
('public.pregunta_id_seq'::regclass);

ALTER TABLE ONLY public.privilegio
ALTER COLUMN id
SET
DEFAULT nextval
('public.privilegio_id_seq'::regclass);

ALTER TABLE ONLY public.rol
ALTER COLUMN id
SET
DEFAULT nextval
('public.rol_id_seq'::regclass);

ALTER TABLE ONLY public.sinergia
ALTER COLUMN id
SET
DEFAULT nextval
('public.sinergia_id_seq'::regclass);

ALTER TABLE ONLY public.temporalidad
ALTER COLUMN id
SET
DEFAULT nextval
('public.temporalidad_id_seq'::regclass);

ALTER TABLE ONLY public.tipo_investigacion
ALTER COLUMN id
SET
DEFAULT nextval
('public.tipo_investigacion_id_seq'::regclass);

ALTER TABLE ONLY public.unidad_estudio
ALTER COLUMN id
SET
DEFAULT nextval
('public.unidad_estudio_id_seq'::regclass);

ALTER TABLE ONLY public.unidad_informacion
ALTER COLUMN id
SET
DEFAULT nextval
('public.unidad_informacion_id_seq'::regclass);

ALTER TABLE ONLY public.usuario
ALTER COLUMN id
SET
DEFAULT nextval
('public.usuario_id_seq'::regclass);

ALTER TABLE ONLY public.modalidad
ALTER COLUMN id
SET
DEFAULT nextval
('public.modalidad_id_seq'::regclass);

ALTER TABLE ONLY public.bibliografia
ALTER COLUMN id
SET
DEFAULT nextval
('public.bibliografia_id_seq'::regclass);

ALTER TABLE ONLY public.categoria
ALTER COLUMN id
SET
DEFAULT nextval
('public.categoria_id_seq'::regclass);

ALTER TABLE ONLY public.tecnica_analisis
ALTER COLUMN id
SET
DEFAULT nextval
('public.tecnica_analisis_id_seq'::regclass);

ALTER TABLE ONLY public.tecnica_analisis_aplicada
ALTER COLUMN id
SET
DEFAULT nextval
('public.tecnica_analisis_aplicada_id_seq'::regclass);

ALTER TABLE ONLY public.unidad_estudio_ui
ALTER COLUMN id
SET
DEFAULT nextval
('public.unidad_estudio_ui_id_seq'::regclass);

ALTER TABLE ONLY public.contexto_ui
ALTER COLUMN id
SET
DEFAULT nextval
('public.contexto_ui_id_seq'::regclass);

ALTER TABLE ONLY public.dimension
ALTER COLUMN id
SET
DEFAULT nextval
('public.dimension_id_seq'::regclass);

ALTER TABLE ONLY public.rol_privilegio
ALTER COLUMN id
SET
DEFAULT nextval
('public.rol_privilegio_id_seq'::regclass);

ALTER TABLE ONLY public.tecnica_recoleccion
ALTER COLUMN id
SET
DEFAULT nextval
('public.tecnica_recoleccion_id_seq'::regclass);

ALTER TABLE ONLY public.justificacion
ALTER COLUMN id
SET
DEFAULT nextval
('public.justificacion_id_seq'::regclass);

ALTER TABLE ONLY public.justificacion_ui
ALTER COLUMN id
SET
DEFAULT nextval
('public.justificacion_ui_id_seq'::regclass);

ALTER TABLE ONLY public.categoria_calidad
ALTER COLUMN id
SET
DEFAULT nextval
('public.categoria_calidad_id_seq'::regclass);

ALTER TABLE ONLY public.calidad_pregunta
ALTER COLUMN id
SET
DEFAULT nextval
('public.calidad_pregunta_id_seq'::regclass);

ALTER TABLE ONLY public.calidad_item
ALTER COLUMN id
SET
DEFAULT nextval
('public.calidad_item_id_seq'::regclass);

ALTER TABLE ONLY public.poblacion
ALTER COLUMN id
SET
DEFAULT nextval
('public.poblacion_id_seq'::regclass);

ALTER TABLE ONLY public.muestra
ALTER COLUMN id
SET
DEFAULT nextval
('public.muestra_id_seq'::regclass);

ALTER TABLE ONLY public.tecnica_muestreo_aplicada
ALTER COLUMN id
SET
DEFAULT nextval
('public.tecnica_muestreo_aplicada_id_seq'::regclass);

ALTER TABLE ONLY public.tecnica_muestreo
ALTER COLUMN id
SET
DEFAULT nextval
('public.tecnica_muestreo_id_seq'::regclass);

/*ALTER SEQUENCE END*/



/*ALTER PRIMARY KEY START*/

ALTER TABLE ONLY public.evento_ui
ADD CONSTRAINT evento_ui_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.criterio_metodologico
ADD CONSTRAINT criterio_metodologico_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.criterio_metodologico_ui
ADD CONSTRAINT criterio_metodologico_ui_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.rol_privilegio
ADD CONSTRAINT rol_privilegio_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.contexto
ADD CONSTRAINT contexto_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.dimension
ADD CONSTRAINT dimension_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.diseno
ADD CONSTRAINT diseno_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.evento
ADD CONSTRAINT evento_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.foco
ADD CONSTRAINT foco_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.fuente
ADD CONSTRAINT fuente_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.indicio
ADD CONSTRAINT indicio_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.institucion
ADD CONSTRAINT institucion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.instrumento
ADD CONSTRAINT instrumento_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.investigacion
ADD CONSTRAINT investigacion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.item
ADD CONSTRAINT item_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.migrations
ADD CONSTRAINT migrations_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.objetivo_general
ADD CONSTRAINT objetivo_general_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.objetivo_especifico
ADD CONSTRAINT objetivo_especifico_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.parametro
ADD CONSTRAINT parametro_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.persona
ADD CONSTRAINT persona_pkey PRIMARY KEY
(cedula);

ALTER TABLE ONLY public.pregunta
ADD CONSTRAINT pregunta_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.privilegio
ADD CONSTRAINT privilegio_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.rol
ADD CONSTRAINT rol_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.sinergia
ADD CONSTRAINT sinergia_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.tecnica_recoleccion
ADD CONSTRAINT tecnica_recoleccion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.temporalidad
ADD CONSTRAINT temporalidad_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.tipo_investigacion
ADD CONSTRAINT tipo_investigacion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.unidad_estudio
ADD CONSTRAINT unidad_estudio_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.unidad_informacion
ADD CONSTRAINT unidad_informacion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.usuario
ADD CONSTRAINT usuario_email_unique UNIQUE
(email);

ALTER TABLE ONLY public.usuario
ADD CONSTRAINT usuario_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.modalidad
ADD CONSTRAINT modalidad_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.bibliografia
ADD CONSTRAINT bibliografia_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.categoria
ADD CONSTRAINT categoria_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.tecnica_analisis
ADD CONSTRAINT tecnica_analisis_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.tecnica_analisis_aplicada
ADD CONSTRAINT tecnica_analisis_aplicada_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.unidad_estudio_ui
ADD CONSTRAINT unidad_estudio_ui_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.contexto_ui
ADD CONSTRAINT contexto_ui_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.justificacion
ADD CONSTRAINT justificacion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.justificacion_ui
ADD CONSTRAINT justificacion_ui_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.categoria_calidad
ADD CONSTRAINT categoria_calidad_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.calidad_pregunta
ADD CONSTRAINT calidad_pregunta_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.calidad_item
ADD CONSTRAINT calidad_item_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.poblacion
ADD CONSTRAINT poblacion_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.muestra
ADD CONSTRAINT muestra_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.tecnica_muestreo_aplicada
ADD CONSTRAINT tecnica_muestreo_aplicada_pkey PRIMARY KEY
(id);

ALTER TABLE ONLY public.tecnica_muestreo
ADD CONSTRAINT tecnica_muestreo_pkey PRIMARY KEY
(id);

/*ALTER PRIMARY KEY END*/




/*ALTER INDEX START*/

/*investigacion*/
CREATE INDEX fki_fk_usuario ON public.investigacion USING btree
(fk_usuario);

/*usuario*/
CREATE INDEX fki_fk_rol ON public.usuario USING btree
(fk_rol);

/*pregunta*/
CREATE INDEX fki_relacion_investigacion ON public.pregunta USING btree
(fk_investigacion);
CREATE INDEX fki_relacion_tipo_investigacion ON public.pregunta USING btree
(fk_tipo_investigacion);
CREATE INDEX fki_relacion_modalidad ON public.pregunta USING btree
(fk_modalidad);
CREATE INDEX fki_pregunta_temporalidad ON public.pregunta USING btree
(fk_temporalidad);

/*evento_ui*/
CREATE INDEX fki_evento_ui_unidad_informacion ON public.evento_ui USING btree
(fk_unidad_informacion);
CREATE INDEX fki_relacion_evento ON public.evento_ui USING btree
(fk_evento);

/*indicio*/
CREATE INDEX fki_relacion_sinergia ON public.indicio USING btree
(fk_sinergia);

/*diseno*/
CREATE INDEX fki_relacion_dimension ON public.diseno USING btree
(fk_dimension);
CREATE INDEX fki_relacion_fuente ON public.diseno USING btree
(fk_fuente);
CREATE INDEX fki_relacion_foco ON public.diseno USING btree
(fk_foco);

/*item*/
CREATE INDEX fki_relacion_indicio ON public.item USING btree
(fk_indicio);
CREATE INDEX fki_relacion_parametro ON public.item USING btree
(fk_parametro);
CREATE INDEX fki_relacion_instrumento ON public.item USING btree
(fk_instrumento);

/*persona*/
CREATE INDEX fki_relacion_usuario ON public.persona USING btree
(fk_usuario);
CREATE INDEX fki_relacion_institucion ON public.persona USING btree
(fk_institucion);

/*objetivo_general*/
CREATE INDEX fki_objetivo_general_pregunta ON public.objetivo_general USING btree
(fk_pregunta);

/*objetivo_especifico*/
CREATE INDEX fki_objetivo_especifico_objetivo_general ON public.objetivo_especifico USING btree
(fk_objetivo_general);

/*password_resets*/
CREATE INDEX password_resets_email_index ON public.password_resets USING btree
(email);

/*criterio_metodologico*/
CREATE INDEX fki_criterio_metodologico_diseno ON public.criterio_metodologico USING btree
(fk_diseno);

/*criterio_metodologico_ui*/
CREATE INDEX fki_criterio_metodologico_ui_unidad_informacion ON public.criterio_metodologico_ui USING btree
(fk_unidad_informacion);
CREATE INDEX fki_criterio_metodologico_ui_criterio_metodologico ON public.criterio_metodologico_ui USING btree
(fk_criterio_metodologico);

/*instrumento*/
CREATE INDEX fki_instrumento_tecnica_recoleccion ON public.instrumento USING btree
(fk_tecnica_recoleccion);

/*rol_privilegio*/
CREATE INDEX fki_rol_privilegio_rol ON public.rol_privilegio USING btree
(fk_rol);
CREATE INDEX fki_rol_privilegio_privilegio ON public.rol_privilegio USING btree
(fk_privilegio);

/*sinergia*/
CREATE INDEX fki_sinergia_evento_ui ON public.sinergia USING btree
(fk_evento_ui);

/*unidad_informacion*/
CREATE INDEX fki_unidad_informacion_categoria ON public.unidad_informacion USING btree
(fk_categoria);
CREATE INDEX fki_unidad_informacion_pregunta ON public.unidad_informacion USING btree
(fk_pregunta);

/*bibliografia_usada*/
CREATE INDEX fki_bibliografia_usada_unidad_informacion ON public.bibliografia_usada USING btree
(fk_unidad_informacion);
CREATE INDEX fki_bibliografia_usada_bibliografia ON public.bibliografia_usada USING btree
(fk_bibliografia);

/*categoria*/
CREATE INDEX fki_categoria_categoria ON public.categoria USING btree
(fk_categoria);

/*unidad_estudio_ui*/
CREATE INDEX fki_unidad_estudio_ui_unidad_estudio ON public.unidad_estudio_ui USING btree
(fk_unidad_estudio);
CREATE INDEX fki_unidad_estudio_ui_unidad_informacion ON public.unidad_estudio_ui USING btree
(fk_unidad_informacion);

/*contexto_ui*/
CREATE INDEX fki_contexto_ui_contexto ON public.contexto_ui USING btree
(fk_contexto);
CREATE INDEX fki_contexto_ui_unidad_informacion ON public.contexto_ui USING btree
(fk_unidad_informacion);

/*calidad_pregunta*/
CREATE INDEX fki_calidad_pregunta_categoria_calidad ON public.calidad_pregunta USING btree
(fk_categoria_calidad);

/*calidad_item*/
CREATE INDEX fki_calidad_item_calidad_pregunta ON public.calidad_item USING btree
(fk_calidad_pregunta);
CREATE INDEX fki_calidad_item_investigacion ON public.calidad_item USING btree
(fk_investigacion);

/*poblacion*/
CREATE INDEX fki_poblacion_unidad_estudio_ui ON public.poblacion USING btree
(fk_unidad_estudio_ui);

/*justificacion_ui*/
CREATE INDEX fki_justificacion_ui_justificacion ON public.justificacion_ui USING btree
(fk_justificacion);
CREATE INDEX fki_justificacion_ui_unidad_informacion ON public.justificacion_ui USING btree
(fk_unidad_informacion);

/*muestra*/
CREATE INDEX fki_muestra_poblacion ON public.muestra USING btree
(fk_poblacion);

/*tecnica_muestreo_aplicada*/
CREATE INDEX fki_tecnica_muestreo_aplicada_muestra ON public.tecnica_muestreo_aplicada USING btree
(fk_muestra);
CREATE INDEX fki_tecnica_muestreo_aplicada_tecnica_muestreo ON public.tecnica_muestreo_aplicada USING btree
(fk_tecnica_muestreo);

/*tecnica_analisis_aplicada*/
CREATE INDEX fki_tecnica_analisis_aplicada_criterio_metodologico ON public.tecnica_analisis_aplicada USING btree
(fk_criterio_metodologico);
CREATE INDEX fki_tecnica_analisis_aplicada_tecnica_analisis ON public.tecnica_analisis_aplicada USING btree
(fk_tecnica_analisis);

/*ALTER INDEX END*/





/*ALTER FOREIGN KEY START*/

/*FKs investigacion*/
ALTER TABLE ONLY public.investigacion
ADD CONSTRAINT relacion_investigacion_usuario FOREIGN KEY
(fk_usuario) REFERENCES public.usuario
(id);

/*FKs usuario*/
ALTER TABLE ONLY public.usuario
ADD CONSTRAINT relacion_usuario_rol FOREIGN KEY
(fk_rol) REFERENCES public.rol
(id);

/*FKs pregunta*/
ALTER TABLE ONLY public.pregunta
ADD CONSTRAINT relacion_pregunta_investigacion FOREIGN KEY
(fk_investigacion) REFERENCES public.investigacion
(id);
ALTER TABLE ONLY public.pregunta
ADD CONSTRAINT relacion_pregunta_tipo_investigacion FOREIGN KEY
(fk_tipo_investigacion) REFERENCES public.tipo_investigacion
(id);
ALTER TABLE ONLY public.pregunta
ADD CONSTRAINT relacion_pregunta_modalidad FOREIGN KEY
(fk_modalidad) REFERENCES public.modalidad
(id);
ALTER TABLE ONLY public.pregunta
ADD CONSTRAINT relacion_pregunta_temporalidad FOREIGN KEY
(fk_temporalidad) REFERENCES public.temporalidad
(id);

/*FKs criterio_metodologico*/
ALTER TABLE ONLY public.criterio_metodologico
ADD CONSTRAINT relacion_criterio_metodologico_diseno FOREIGN KEY
(fk_diseno) REFERENCES public.diseno
(id);

/*FKs criterio_metodologico_ui*/
ALTER TABLE ONLY public.criterio_metodologico_ui
ADD CONSTRAINT relacion_criterio_metodologico_ui_criterio_metodologico FOREIGN KEY
(fk_criterio_metodologico) REFERENCES public.criterio_metodologico
(id);
ALTER TABLE ONLY public.criterio_metodologico_ui
ADD CONSTRAINT relacion_criterio_metodologico_ui_unidad_informacion FOREIGN KEY
(fk_unidad_informacion) REFERENCES public.unidad_informacion
(id);

/*FKs evento_ui*/
ALTER TABLE ONLY public.evento_ui
ADD CONSTRAINT relacion_evento_ui_evento FOREIGN KEY
(fk_evento) REFERENCES public.evento
(id);
ALTER TABLE ONLY public.evento_ui
ADD CONSTRAINT relacion_evento_ui_unidad_informacion FOREIGN KEY
(fk_unidad_informacion) REFERENCES public.unidad_informacion
(id);

/*FKs sinergia*/
ALTER TABLE ONLY public.sinergia
ADD CONSTRAINT relacion_sinergia_evento_ui FOREIGN KEY
(fk_evento_ui) REFERENCES public.evento_ui
(id);

/*FKs diseno*/
ALTER TABLE ONLY public.diseno
ADD CONSTRAINT relacion_diseno_fuente FOREIGN KEY
(fk_fuente) REFERENCES public.fuente
(id);
ALTER TABLE ONLY public.diseno
ADD CONSTRAINT relacion_diseno_foco FOREIGN KEY
(fk_foco) REFERENCES public.foco
(id);ALTER TABLE ONLY public.diseno
ADD CONSTRAINT relacion_diseno_dimension FOREIGN KEY
(fk_dimension) REFERENCES public.dimension
(id);

/*FKs item*/
ALTER TABLE ONLY public.item
ADD CONSTRAINT relacion_item_indicio FOREIGN KEY
(fk_indicio) REFERENCES public.indicio
(id);
ALTER TABLE ONLY public.item
ADD CONSTRAINT relacion_item_instrumento FOREIGN KEY
(fk_instrumento) REFERENCES public.instrumento
(id);
ALTER TABLE ONLY public.item
ADD CONSTRAINT relacion_item_parametro FOREIGN KEY
(fk_parametro) REFERENCES public.parametro
(id);

/*FKs unidad_informacion*/
ALTER TABLE ONLY public.unidad_informacion
ADD CONSTRAINT relacion_unidad_informacion_categoria FOREIGN KEY
(fk_categoria) REFERENCES public.categoria
(id);
ALTER TABLE ONLY public.unidad_informacion
ADD CONSTRAINT relacion_unidad_informacion_pregunta FOREIGN KEY
(fk_pregunta) REFERENCES public.pregunta
(id);

/*FKs indicio*/
ALTER TABLE ONLY public.indicio
ADD CONSTRAINT relacion_indicio_sinergia FOREIGN KEY
(fk_sinergia) REFERENCES public.sinergia
(id);

/*FKs persona*/
ALTER TABLE ONLY public.persona
ADD CONSTRAINT relacion_persona_usuario FOREIGN KEY
(fk_usuario) REFERENCES public.usuario
(id);
ALTER TABLE ONLY public.persona
ADD CONSTRAINT relacion_persona_institucion FOREIGN KEY
(fk_institucion) REFERENCES public.institucion
(id);

/*FKs rol_privilegio*/
ALTER TABLE ONLY public.rol_privilegio
ADD CONSTRAINT relacion_rol_privilegio_privilegio FOREIGN KEY
(fk_privilegio) REFERENCES public.privilegio
(id);
ALTER TABLE ONLY public.rol_privilegio
ADD CONSTRAINT relacion_rol_privilegio_rol FOREIGN KEY
(fk_rol) REFERENCES public.rol
(id);

/*FKs bibliografia_usada*/
ALTER TABLE ONLY public.bibliografia_usada
ADD CONSTRAINT relacion_bibliografia_usada_unidad_informacion FOREIGN KEY
(fk_unidad_informacion) REFERENCES public.unidad_informacion
(id);
ALTER TABLE ONLY public.bibliografia_usada
ADD CONSTRAINT relacion_bibliografia_usada_bibliografia FOREIGN KEY
(fk_bibliografia) REFERENCES public.bibliografia
(id);

/*FKs categoria*/
ALTER TABLE ONLY public.categoria
ADD CONSTRAINT recursiva_categoria FOREIGN KEY
(fk_categoria) REFERENCES public.categoria
(id);

/*FKs contexto_ui*/
ALTER TABLE ONLY public.contexto_ui
ADD CONSTRAINT relacion_contexto_ui_contexto FOREIGN KEY
(fk_contexto) REFERENCES public.contexto
(id);
ALTER TABLE ONLY public.contexto_ui
ADD CONSTRAINT relacion_contexto_ui_unidad_informacion FOREIGN KEY
(fk_unidad_informacion) REFERENCES public.unidad_informacion
(id);

/*FKs instrumento*/
ALTER TABLE ONLY public.instrumento
ADD CONSTRAINT relacion_instrumento_tecnica FOREIGN KEY
(fk_tecnica_recoleccion) REFERENCES public.tecnica_recoleccion
(id);

/*FKs objetivo_general*/
ALTER TABLE ONLY public.objetivo_general
ADD CONSTRAINT relacion_objetivo_general_pregunta FOREIGN KEY
(fk_pregunta) REFERENCES public.pregunta
(id);

/*FKs objetivo_especifico*/
ALTER TABLE ONLY public.objetivo_especifico
ADD CONSTRAINT relacion_objetivo_especifico_objetivo_general FOREIGN KEY
(fk_objetivo_general) REFERENCES public.objetivo_general
(id);

/*FKs unidad_estudio_ui*/
ALTER TABLE ONLY public.unidad_estudio_ui
ADD CONSTRAINT relacion_unidad_estudio_ui_unidad_informacion FOREIGN KEY
(fk_unidad_informacion) REFERENCES public.unidad_informacion
(id);
ALTER TABLE ONLY public.unidad_estudio_ui
ADD CONSTRAINT relacion_unidad_estudio_ui_unidad_estudio FOREIGN KEY
(fk_unidad_estudio) REFERENCES public.unidad_estudio
(id);

/*FKs calidad_pregunta*/
ALTER TABLE ONLY public.calidad_pregunta
ADD CONSTRAINT relacion_calidad_pregunta_categoria_calidad FOREIGN KEY
(fk_categoria_calidad) REFERENCES public.categoria_calidad
(id);

/*FKs calidad_item*/
ALTER TABLE ONLY public.calidad_item
ADD CONSTRAINT relacion_calidad_item_investigacion FOREIGN KEY
(fk_investigacion) REFERENCES public.investigacion
(id);
ALTER TABLE ONLY public.calidad_item
ADD CONSTRAINT relacion_calidad_item_calidad_pregunta FOREIGN KEY
(fk_calidad_pregunta) REFERENCES public.calidad_pregunta
(id);

/*FKs poblacion*/
ALTER TABLE ONLY public.poblacion
ADD CONSTRAINT relacion_poblacion_unidad_estudio_ui FOREIGN KEY
(fk_unidad_estudio_ui) REFERENCES public.unidad_estudio_ui
(id);

/*FKs muestra*/
ALTER TABLE ONLY public.muestra
ADD CONSTRAINT relacion_muestra_poblacion FOREIGN KEY
(fk_poblacion) REFERENCES public.poblacion
(id);

/*FKs tecnica_muestreo_aplicada*/
ALTER TABLE ONLY public.tecnica_muestreo_aplicada
ADD CONSTRAINT relacion_tecnica_muestreo_aplicada_muestra FOREIGN KEY
(fk_muestra) REFERENCES public.muestra
(id);
ALTER TABLE ONLY public.tecnica_muestreo_aplicada
ADD CONSTRAINT relacion_tecnica_muestreo_aplicada_tecnica_muestreo FOREIGN KEY
(fk_tecnica_muestreo) REFERENCES public.tecnica_muestreo
(id);

/*FKs tecnica_analisis_aplicada*/
ALTER TABLE ONLY public.tecnica_analisis_aplicada
ADD CONSTRAINT relacion_tecnica_analisis_aplicada_criterio_metodologico FOREIGN KEY
(fk_criterio_metodologico) REFERENCES public.criterio_metodologico
(id);
ALTER TABLE ONLY public.tecnica_analisis_aplicada
ADD CONSTRAINT relacion_tecnica_analisis_aplicada_tecnica_analisis FOREIGN KEY
(fk_tecnica_analisis) REFERENCES public.tecnica_analisis
(id);

/*FKs justificacion_ui*/
ALTER TABLE ONLY public.justificacion_ui
ADD CONSTRAINT relacion_justificacion_ui_justificacion FOREIGN KEY
(fk_justificacion) REFERENCES public.justificacion
(id);
ALTER TABLE ONLY public.justificacion_ui
ADD CONSTRAINT relacion_justificacion_ui_unidad_informacion FOREIGN KEY
(fk_unidad_informacion) REFERENCES public.unidad_informacion
(id);


/*ALTER FOREIGN KEY END*/