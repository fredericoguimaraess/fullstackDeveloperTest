import axios from 'axios';

const Auth = () => {
    const registrarUsuario = async (name, email, password) => {
        try {
            await axios.post('/api/register', { name, email, password });
            console.log('Usuário registrado com sucesso');
        } catch (error) {
            console.error('Erro ao registrar usuário:', error);
        }
    };

    const logarUsuario = async (email, password) => {
        try {
            await axios.post('/api/login', { email, password });
            console.log('Usuário logado com sucesso');
        } catch (error) {
            console.error('Erro ao autenticar usuário:', error);
        }
    };

    return (
        <div>
            {/* Formulário de registro de usuário */}
            <h2>Registrar Usuário</h2>
            {/* ... (campos do formulário) */}
            <button className="btn btn-success" onClick={() => registrarUsuario(/*...*/)}>
                Registrar
            </button>

            {/* Formulário de login */}
            <h2>Login</h2>
            {/* ... (campos do formulário) */}
            <button className="btn btn-primary" onClick={() => logarUsuario(/*...*/)}>
                Entrar
            </button>
        </div>
    );
};

export default Auth;
