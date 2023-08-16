tailwind.config = {
    theme: {
      extend: {
        colors: {
          clifford: '#da373d',
        },
        animation: {
          'little': 'little 3s linear infinite',
        },
        keyframes: {
          little: {
            '0%, 100%': { transform: 'translateY(0px) scale(1)' },
            '50%': { transform: 'translateY(10px) scale(1.01)' },
          }
        },
        
      }
    }
  };
 

