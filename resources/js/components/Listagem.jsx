import React, { useState, useEffect } from 'react';
import axios from 'axios';

const Listagem = () => {
    const [subscriptions, setSubscriptions] = useState([]);
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    useEffect(() => {
        const fetchSubscriptions = async () => {
            try {
                const response = await axios.get('/api/inscricoes');
                setSubscriptions(response.data);
            } catch (error) {
                console.error('Erro ao buscar inscrições:', error);
            }
        };
        fetchSubscriptions();
    }, []);
    const enviarInscricao = async () => {
        try {
            // Validar campos name e email antes de enviar, se necessário

            await axios.post('/api/inscricao', { name, email });
            console.log('Inscrição enviada com sucesso');

            // Atualizar a lista de inscrições após o envio bem-sucedido (opcional)
            fetchSubscriptions();
        } catch (error) {
            console.error('Erro ao enviar inscrição:', error);
        }
    };

    const registrarUsuario = async () => {
        try {
            await axios.post('/api/register', { email, password });
            console.log('Usuário registrado com sucesso');
        } catch (error) {
            console.error('Erro ao registrar usuário:', error);
        }
    };

    return (
        <div>
            <h1>Lista de Inscrições</h1>
            <table className="table">
                {/* Tabela de inscrições */}
            </table>
            <button className="btn btn-primary" onClick={enviarInscricao}>
                Enviar
            </button>

            {/* Formulário de registro de usuário */}
            <h2>Registrar Usuário</h2>
            <div>
                <label>Email:</label>
                <input type="email" value={email} onChange={e => setEmail(e.target.value)} />
            </div>
            <div>
                <label>Senha:</label>
                <input type="password" value={password} onChange={e => setPassword(e.target.value)} />
            </div>
            <button className="btn btn-success" onClick={registrarUsuario}>
                Registrar
            </button>
        </div>
    );
};

export default Listagem;
