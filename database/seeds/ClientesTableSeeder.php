<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clientes')->delete();
        
        \DB::table('clientes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nome' => 'Lorenzo Carlos da Conceição',
                'email' => 'lorenzocarlosdaconceicao-83@dominiozeladoria.com.br',
                'data_nascimento' => '1941-02-22',
            'telefone_celular' => '(92) 99357-3600',
            'telefone_residencial' => '(92) 2894-9343',
                'id_cidade' => 1302603,
                'cep' => '69084-575',
                'bairro' => 'Zumbi dos Palmares',
                'rua' => 'Travessa Marabá',
                'numero_rua' => 341,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 79,
                'deseja_notificacao' => 0,
                'created_at' => '2019-11-16 02:01:13',
                'updated_at' => '2019-11-16 02:01:13',
            ),
            1 => 
            array (
                'id' => 2,
                'nome' => 'Manuel Ricardo Martins',
                'email' => 'manuelricardomartins-94@humanfit.com.br',
                'data_nascimento' => '1991-04-19',
            'telefone_celular' => '(63) 99484-1606',
            'telefone_residencial' => '(63) 2724-2881',
                'id_cidade' => 4117602,
                'cep' => '77021-660',
                'bairro' => 'Plano Diretor Sul',
                'rua' => '502 Sul Avenida LO 11',
                'numero_rua' => 958,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 394,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:02:28',
                'updated_at' => '2019-11-16 02:02:28',
            ),
            2 => 
            array (
                'id' => 3,
                'nome' => 'Kevin Paulo da Silva',
                'email' => 'kevinpaulodasilva-80@yahoo.co.uk',
                'data_nascimento' => '1997-04-05',
            'telefone_celular' => '(81) 99959-3629',
            'telefone_residencial' => '(81) 3914-6865',
                'id_cidade' => 2607901,
                'cep' => '54130-280',
                'bairro' => 'Manassu',
                'rua' => 'Rua Ametista',
                'numero_rua' => 215,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 559,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:03:12',
                'updated_at' => '2019-11-16 02:03:12',
            ),
            3 => 
            array (
                'id' => 4,
                'nome' => 'Luan Diogo de Paula',
                'email' => 'lluandiogodepaula@inovasom.com',
                'data_nascimento' => '1962-03-23',
            'telefone_celular' => '(83) 99444-9798',
            'telefone_residencial' => '(83) 2895-4615',
                'id_cidade' => 2504009,
                'cep' => '58416-395',
                'bairro' => 'Santa Rosa',
                'rua' => 'Rua Professor Carlos Antônio da Costa',
                'numero_rua' => 605,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 1691,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:03:55',
                'updated_at' => '2019-11-16 02:03:55',
            ),
            4 => 
            array (
                'id' => 5,
                'nome' => 'Mário Juan Fernandes',
                'email' => 'mariojuanfernandes@phocus.com.br',
                'data_nascimento' => '1961-03-20',
            'telefone_celular' => '(15) 98436-0332',
            'telefone_residencial' => '(15) 2897-5559',
                'id_cidade' => 3552205,
                'cep' => '18022-080',
                'bairro' => 'Vila João Romão',
                'rua' => 'Rua Lucas de Oliveira',
                'numero_rua' => 309,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 1605,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:05:32',
                'updated_at' => '2019-11-16 02:05:32',
            ),
            5 => 
            array (
                'id' => 6,
                'nome' => 'Andrea Eloá Emilly Rodrigues',
                'email' => 'andreaeloaemillyrodrigues@gmail.com.br',
                'data_nascimento' => '1984-08-11',
            'telefone_celular' => '(15) 98598-1818',
            'telefone_residencial' => '(15) 3284-3843',
                'id_cidade' => 3552205,
                'cep' => '18043-150',
                'bairro' => 'Vila Lucy',
                'rua' => 'Rua Isauro Costa Dias',
                'numero_rua' => 780,
                'complemento_rua' => NULL,
                'pontuacao' => 0,
                'id_profissao' => NULL,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:06:13',
                'updated_at' => '2019-11-16 02:06:13',
            ),
            6 => 
            array (
                'id' => 7,
                'nome' => 'Gabriel Thomas Sebastião Ramos',
                'email' => 'gabrielth@lnaa.com.br',
                'data_nascimento' => '1961-08-25',
            'telefone_celular' => '(15) 98666-8227',
            'telefone_residencial' => '(15) 2593-4737',
                'id_cidade' => 3552205,
                'cep' => '18071-076',
                'bairro' => 'Ipanema Ville',
                'rua' => 'Rua Miguel Moreno',
                'numero_rua' => 569,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 1979,
                'deseja_notificacao' => 0,
                'created_at' => '2019-11-16 02:06:24',
                'updated_at' => '2019-11-16 02:06:24',
            ),
            7 => 
            array (
                'id' => 8,
                'nome' => 'Luís Kaique Alexandre Vieira',
                'email' => 'lluiskaiquealeieira@nelnalimis.com.br',
                'data_nascimento' => '1983-03-25',
            'telefone_celular' => '(15) 98454-9519',
            'telefone_residencial' => '(15) 3714-8212',
                'id_cidade' => 3552205,
                'cep' => '18017-139',
                'bairro' => 'Jardim Bandeirantes',
                'rua' => 'Praça Jesus de Andrade Bernardes',
                'numero_rua' => 741,
                'complemento_rua' => NULL,
                'pontuacao' => 0,
                'id_profissao' => 1178,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:08:34',
                'updated_at' => '2019-11-16 02:08:34',
            ),
            8 => 
            array (
                'id' => 9,
                'nome' => 'Sebastiana Sophia da Cruz',
                'email' => 'sebastianasophiadacruz@gmail.com.br',
                'data_nascimento' => '1966-11-10',
            'telefone_celular' => '(15) 98853-1683',
            'telefone_residencial' => '(15) 3266-7617',
                'id_cidade' => 3552205,
                'cep' => '18077-310',
                'bairro' => 'Jardim Santo André',
                'rua' => 'Rua Benedicto Antunes',
                'numero_rua' => 684,
                'complemento_rua' => NULL,
                'pontuacao' => 0,
                'id_profissao' => NULL,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:09:14',
                'updated_at' => '2019-11-16 02:09:14',
            ),
            9 => 
            array (
                'id' => 10,
                'nome' => 'Anderson Vinicius Barros',
                'email' => 'andersonviniciusbarross@outlook.com',
                'data_nascimento' => '1991-08-02',
            'telefone_celular' => '(15) 98267-9573',
            'telefone_residencial' => '(15) 2919-4493',
                'id_cidade' => 3552205,
                'cep' => '18040-795',
                'bairro' => 'Jardim Paulistano',
                'rua' => 'Rua Cuiabá',
                'numero_rua' => 168,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 2228,
                'deseja_notificacao' => 0,
                'created_at' => '2019-11-16 02:10:23',
                'updated_at' => '2019-11-16 02:10:23',
            ),
            10 => 
            array (
                'id' => 11,
                'nome' => 'Rayssa Carolina Figueiredo',
                'email' => 'rayssacarolinafigueiredo-81@lojapetline.com.br',
                'data_nascimento' => '1965-08-17',
            'telefone_celular' => '(15) 98248-2003',
            'telefone_residencial' => '(15) 3525-7574',
                'id_cidade' => 3552205,
                'cep' => '18081-310',
                'bairro' => 'Jardim das Acácias',
                'rua' => 'Rua José Rodrigues Blanco',
                'numero_rua' => 338,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 1195,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:11:45',
                'updated_at' => '2019-11-16 02:11:45',
            ),
            11 => 
            array (
                'id' => 12,
                'nome' => 'Sara Vera Jesus',
                'email' => 'saraverajesus@hotmail.com',
                'data_nascimento' => '2000-07-04',
            'telefone_celular' => '(15) 99782-2524',
            'telefone_residencial' => '(15) 3204-1272',
                'id_cidade' => 3552205,
                'cep' => '18076-352',
                'bairro' => 'Jardim Guadalupe',
                'rua' => 'Rua Najla Amary Murad',
                'numero_rua' => 955,
                'complemento_rua' => NULL,
                'pontuacao' => 0,
                'id_profissao' => NULL,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:11:57',
                'updated_at' => '2019-11-16 02:11:57',
            ),
            12 => 
            array (
                'id' => 13,
                'nome' => 'Alessandra Gabrielly Teresinha Dias',
                'email' => 'alessandragabriellyteresinhadias_@teadit.com.br',
                'data_nascimento' => '1981-11-09',
            'telefone_celular' => '(15) 99132-5406',
            'telefone_residencial' => '(15) 3636-0980',
                'id_cidade' => 3552205,
                'cep' => '18017-226',
                'bairro' => 'Granja Olga II',
                'rua' => 'Rua Waldemar José Soave',
                'numero_rua' => 926,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 1287,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:12:40',
                'updated_at' => '2019-11-16 02:12:40',
            ),
            13 => 
            array (
                'id' => 14,
                'nome' => 'Adriana Daniela Mariana Santos',
                'email' => 'adrianadanielamarianasantos_@teadit.com.br',
                'data_nascimento' => '1996-09-06',
            'telefone_celular' => '(15) 98560-7262',
            'telefone_residencial' => '(15) 3669-8125',
                'id_cidade' => 3552205,
                'cep' => '18040-795',
                'bairro' => 'Jardim Paulistano',
                'rua' => 'Rua Cuiabá',
                'numero_rua' => 327,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 760,
                'deseja_notificacao' => 0,
                'created_at' => '2019-11-16 02:13:37',
                'updated_at' => '2019-11-16 02:13:37',
            ),
            14 => 
            array (
                'id' => 15,
                'nome' => 'Eliane Sabrina Silveira',
                'email' => 'elianesabrinasilveira@hotmail.com.br',
                'data_nascimento' => '1998-09-19',
            'telefone_celular' => '(15) 99873-5746',
            'telefone_residencial' => '(15) 3224-8281',
                'id_cidade' => 3552205,
                'cep' => '18051-819',
                'bairro' => 'Jardim Piazza Di Roma II',
                'rua' => 'Rua Arnaldo Barboza Santos',
                'numero_rua' => 419,
                'complemento_rua' => NULL,
                'pontuacao' => 0,
                'id_profissao' => NULL,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:14:16',
                'updated_at' => '2019-11-16 02:14:16',
            ),
            15 => 
            array (
                'id' => 16,
                'nome' => 'Esther Laís Gabrielly Almada',
                'email' => 'estherlaisgabriellyalmada@cntbrasil.com.br',
                'data_nascimento' => '1998-02-27',
            'telefone_celular' => '(15) 99848-6859',
            'telefone_residencial' => '(15) 2806-8443',
                'id_cidade' => 3552205,
                'cep' => '18060-260',
                'bairro' => 'Vila Trujillo',
                'rua' => 'Rua Doutor Virgilio de Mello Franco',
                'numero_rua' => 633,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 1531,
                'deseja_notificacao' => 0,
                'created_at' => '2019-11-16 02:14:18',
                'updated_at' => '2019-11-16 02:14:18',
            ),
            16 => 
            array (
                'id' => 17,
                'nome' => 'Emanuelly Sophia Bernardes',
                'email' => 'eemanuelly@jerasistemas.com.br',
                'data_nascimento' => '1992-08-20',
            'telefone_celular' => '(15) 99276-3692',
            'telefone_residencial' => '(15) 3988-1034',
                'id_cidade' => 3552205,
                'cep' => '18071-815',
                'bairro' => 'Jardim Novo Horizonte',
                'rua' => 'Rua Doutor Carlos Castilho Cabral',
                'numero_rua' => 163,
                'complemento_rua' => '-',
                'pontuacao' => 0,
                'id_profissao' => 761,
                'deseja_notificacao' => 1,
                'created_at' => '2019-11-16 02:15:06',
                'updated_at' => '2019-11-16 02:15:06',
            ),
        ));
        
        
    }
}