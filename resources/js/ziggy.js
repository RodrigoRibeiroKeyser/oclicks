const Ziggy = {"url":"http:\/\/127.0.0.1:8000","port":8000,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"index":{"uri":"\/","methods":["GET","HEAD"]},"planos":{"uri":"planos","methods":["GET","HEAD"]},"login":{"uri":"login","methods":["GET","HEAD"]},"DashboardHome":{"uri":"dashboard","methods":["GET","HEAD"]},"UserRegisterShow":{"uri":"dashboard\/user-register","methods":["GET","HEAD"]},"ListUsers":{"uri":"dashboard\/list-users","methods":["GET","HEAD"]},"planosRegisterShow":{"uri":"dashboard\/cadastro-de-planos","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
